<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // =============================================
    // MAHASISWA — Cookie Based Authentication
    // =============================================

    /** Tampilkan halaman login mahasiswa */
    public function showMahasiswaLogin()
    {
        // Jika cookie valid, langsung ke dashboard
        if (request()->cookie('himti_auth') === 'true') {
            return redirect()->route('mahasiswa.dashboard');
        }
        return view('auth.login-mahasiswa');
    }

    /** Proses login mahasiswa — simpan ke Cookie */
    public function mahasiswaLogin(Request $request)
    {
        $request->validate([
            'nim'      => 'required|string',
            'password' => 'required|string',
        ]);

        // Kredensial mahasiswa (hardcoded untuk demo)
        $credentials = [
            'mahasiswa@himti.ac.id' => 'mahasiswa123',
            '2021001'               => 'mahasiswa123',
            '2021002'               => 'pass2021002',
        ];

        $nim      = $request->input('nim');
        $password = $request->input('password');

        if (isset($credentials[$nim]) && $credentials[$nim] === $password) {

            // Durasi cookie: 7 hari jika "Ingat Saya", 0 (session) jika tidak
            $minutes = $request->has('remember') ? 60 * 24 * 7 : 0;

            // Set cookie autentikasi
            $response = redirect()->route('mahasiswa.dashboard')
                ->with('success', 'Login berhasil! Selamat datang.');

            $response->cookie('himti_auth', 'true', $minutes);
            $response->cookie('himti_nim', $nim, $minutes);
            $response->cookie('himti_role', 'mahasiswa', $minutes);

            return $response;
        }

        return back()->with('error', 'NIM/Email atau password salah!');
    }

    /** Dashboard mahasiswa — cek cookie */
    public function mahasiswaDashboard(Request $request)
    {
        // Cek cookie autentikasi
        if ($request->cookie('himti_auth') !== 'true' || $request->cookie('himti_role') !== 'mahasiswa') {
            return redirect()->route('mahasiswa.login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }

        $nim = $request->cookie('himti_nim');
        return view('dashboard.mahasiswa', compact('nim'));
    }

    /** Logout mahasiswa — hapus semua cookie */
    public function mahasiswaLogout()
    {
        return redirect()->route('mahasiswa.login')
            ->with('success', 'Kamu berhasil logout.')
            ->withoutCookie('himti_auth')
            ->withoutCookie('himti_nim')
            ->withoutCookie('himti_role');
    }

    // =============================================
    // ADMIN — Session Based Authentication
    // =============================================

    /** Tampilkan halaman login admin */
    public function showAdminLogin()
    {
        // Jika session valid, langsung ke dashboard
        if (session('admin_logged_in') === true) {
            return redirect()->route('admin.dashboard');
        }
        return view('auth.login-admin');
    }

    /** Proses login admin — simpan ke Session */
    public function adminLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Kredensial admin (hardcoded untuk demo)
        $admins = [
            'admin'       => 'admin123',
            'superadmin'  => 'super@2026',
            'ketua'       => 'ketua2026',
        ];

        $username = $request->input('username');
        $password = $request->input('password');

        if (isset($admins[$username]) && $admins[$username] === $password) {

            // Simpan data ke Session (server-side)
            $request->session()->put('admin_logged_in', true);
            $request->session()->put('admin_username', $username);
            $request->session()->put('admin_role', 'administrator');
            $request->session()->put('admin_login_time', now()->format('d M Y, H:i'));

            // Regenerate session ID untuk keamanan (session fixation prevention)
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard')
                ->with('success', 'Login admin berhasil!');
        }

        return back()->with('error', 'Username atau password admin salah!');
    }

    /** Dashboard admin — cek session */
    public function adminDashboard(Request $request)
    {
        // Cek session autentikasi
        if (!$request->session()->get('admin_logged_in')) {
            return redirect()->route('admin.login')
                ->with('error', 'Akses ditolak. Silakan login sebagai admin.');
        }

        $username = $request->session()->get('admin_username');
        return view('dashboard.admin', compact('username'));
    }

    /** Logout admin — hapus semua session */
    public function adminLogout(Request $request)
    {
        // Hapus semua data session admin
        $request->session()->forget([
            'admin_logged_in',
            'admin_username',
            'admin_role',
            'admin_login_time',
        ]);

        // Invalidate & regenerate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')
            ->with('success', 'Kamu berhasil logout dari panel admin.');
    }
}
