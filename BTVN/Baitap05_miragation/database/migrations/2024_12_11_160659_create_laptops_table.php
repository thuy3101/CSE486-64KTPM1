<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->string('specifications');
            $table->boolean('rental_status') -> deafault (false);
            $table->foreignId('renter_id')->nullable()->constrained('renters')->onDelete('set null'); // Khóa ngoại tham chiếu đến renters.id
            
        });
        /*id (Mã laptop, primary key, ví dụ: 1001)
        o brand (Hãng sản xuất, ví dụ: "Dell")
        o model (Mẫu laptop, ví dụ: "Inspiron 15 3000")
        o specifications (Thông số kỹ thuật, ví dụ: "i5, 8GB RAM, 256GB SSD")
        o rental_status (Trạng thái cho thuê: true = Đang cho thuê, false = Chưa cho thuê)
        o renter_id (foreign key, tham chiếu đến renters.id, ví dụ: 201 */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
