<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tram_sac', function (Blueprint $table) {
            $table->id('id_tramsac'); // Tạo trường id tự động tăng
            $table->string('phone'); // Số điện thoại, có thể để trống  
            $table->string('name'); // Tên của trạm sạc
            $table->string('name_tramsac'); // Tên trạm sạc
            $table->text('content'); // Nội dung, có thể để trống
            $table->decimal('map', 10, 6); // Kinh độ & Vĩ độ, có thể để trống
            $table->string('address'); // Địa chỉ, có thể để trống
            $table->unsignedBigInteger('id_user'); // ID người dùng, có thể để trống 
            $table->unsignedBigInteger('id_doitac')->nullable(); // ID đối tác, có thể để trống
            $table->timestamps(); // Thêm trường created_at và updated_at

            // Thêm khóa ngoại nếu có bảng đối tác và người dùng
            $table->foreign('id_doitac')->references('id_doitac')->on('network_system')->onDelete('set null');
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tram_sac');
    }
};
