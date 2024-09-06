<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tramsac;
use Illuminate\Support\Facades\Auth;

class TramSacController extends Controller
{
    public function showForm()
    {
        // Nếu người dùng đã đăng nhập, chuyển hướng đến trang chính hoặc trang khác
        if (Auth::check()) {
            return redirect()->route('login'); // Thay 'login' bằng route bạn muốn chuyển hướng đến
        }

        return view('register-charging-station');
    }

    // Xử lý việc lưu trạm sạc
    public function store(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'name_tramsac' => 'required|string|max:255',
            'content' => 'nullable|string',
            'map' => 'nullable|string',
            'address' => 'required|string',
        ]);

        try {
            // Tạo một bản ghi mới trong bảng tram_sac
            TramSac::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'name_tramsac' => $request->input('name_tramsac'),
                'content' => $request->input('content'),
                'map' => $request->input('map'),
                'address' => $request->input('address'),
                'id_user' => Auth::id(), // Lưu ID người dùng hiện tại
            ]);

            return redirect()->back()->with('success', 'Trạm sạc đã được đăng ký thành công!');
        } catch (\Exception $e) {
            // Xử lý lỗi và hiển thị thông báo lỗi
            return redirect()->back()->with('error', 'Đã xảy ra lỗi: ' . $e->getMessage())->withInput();
        }
    }
}
