<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class StatusRule implements Rule
{
    /**
     * Xác định xem giá trị có hợp lệ hay không.
     *
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Kiểm tra nếu giá trị là 0 hoặc 1
        return in_array($value, [0, 1]);
    }

    /**
     * Lấy thông báo lỗi khi validation thất bại.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be either 0 or 1.';
    }
}
