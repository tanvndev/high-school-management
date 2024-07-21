<?php
return [
    'messages' => [
        'required' => ':attribute không được để trống.',
        'unique' => ':attribute đã tồn tại.',
        'string' => ':attribute phải là chuỗi ký tự.',
        'integer' => ':attribute phải là số nguyên.',
        'min' => ':attribute phải có ít nhất :min ký tự.',
        'gt' => ':attribute bắt buộc phải chọn.',
        'accepted'             => ':attribute phải được chấp nhận.',
        'active_url'           => ':attribute không phải là URL hợp lệ.',
        'after'                => ':attribute phải là một ngày sau :date.',
        'after_or_equal'       => ':attribute phải là một ngày sau hoặc bằng :date.',
        'alpha'                => ':attribute chỉ có thể chứa các chữ cái.',
        'alpha_dash'           => ':attribute chỉ có thể chứa các chữ cái, số, dấu gạch ngang và dấu gạch dưới.',
        'alpha_num'            => ':attribute chỉ có thể chứa các chữ cái và số.',
        'array'                => ':attribute phải là một mảng.',
        'before'               => ':attribute phải là một ngày trước :date.',
        'before_or_equal'      => ':attribute phải là một ngày trước hoặc bằng :date.',
        'between'              => [
            'numeric' => ':attribute phải nằm trong khoảng :min và :max.',
            'file'    => ':attribute phải nằm trong khoảng :min và :max kilobytes.',
            'string'  => ':attribute phải nằm trong khoảng :min và :max ký tự.',
            'array'   => ':attribute phải có từ :min đến :max phần tử.',
        ],
        'boolean'              => 'Trường :attribute phải là true hoặc false.',
        'confirmed'            => ':attribute xác nhận không khớp.',
        'date'                 => ':attribute không phải là ngày hợp lệ.',
        'date_format'          => ':attribute không khớp với định dạng :format.',
        'different'            => ':attribute và :other phải khác nhau.',
        'digits'               => ':attribute phải là :digits chữ số.',
        'digits_between'       => ':attribute phải nằm trong khoảng :min và :max chữ số.',
        'dimensions'           => ':attribute có kích thước hình ảnh không hợp lệ.',
        'distinct'             => 'Trường :attribute có giá trị trùng lặp.',
        'email'                => ':attribute phải là địa chỉ email hợp lệ.',
        'exists'               => ':attribute không tồn tại.',
        'file'                 => ':attribute phải là một tệp.',
        'filled'               => 'Trường :attribute phải có giá trị.',
        'image'                => ':attribute phải là một hình ảnh.',
        'in'                   => ':attribute đã chọn không hợp lệ.',
        'in_array'             => 'Trường :attribute không tồn tại trong :other.',
        'ip'                   => ':attribute phải là địa chỉ IP hợp lệ.',
        'ipv4'                 => ':attribute phải là địa chỉ IPv4 hợp lệ.',
        'ipv6'                 => ':attribute phải là địa chỉ IPv6 hợp lệ.',
        'json'                 => ':attribute phải là chuỗi JSON hợp lệ.',
        'max'                  => [
            'numeric' => ':attribute không được lớn hơn :max.',
            'file'    => ':attribute không được lớn hơn :max kilobytes.',
            'string'  => ':attribute không được lớn hơn :max ký tự.',
            'array'   => ':attribute không được có nhiều hơn :max phần tử.',
        ],
        'mimes'                => ':attribute phải là tệp có định dạng: :values.',
        'mimetypes'            => ':attribute phải là tệp có định dạng: :values.',
        'min'                  => [
            'numeric' => ':attribute phải ít nhất là :min.',
            'file'    => ':attribute phải ít nhất là :min kilobytes.',
            'string'  => ':attribute phải ít nhất là :min ký tự.',
            'array'   => ':attribute phải có ít nhất :min phần tử.',
        ],
        'not_in'               => ':attribute đã chọn không hợp lệ.',
        'not_regex'            => 'Định dạng :attribute không hợp lệ.',
        'numeric'              => ':attribute phải là một số.',
        'present'              => 'Trường :attribute phải tồn tại.',
        'regex'                => 'Định dạng :attribute không hợp lệ.',
        'required_if'          => 'Trường :attribute là bắt buộc khi :other là :value.',
        'required_unless'      => 'Trường :attribute là bắt buộc trừ khi :other là :values.',
        'required_with'        => 'Trường :attribute là bắt buộc khi :values tồn tại.',
        'required_with_all'    => 'Trường :attribute là bắt buộc khi :values tồn tại.',
        'required_without'     => 'Trường :attribute là bắt buộc khi :values không tồn tại.',
        'required_without_all' => 'Trường :attribute là bắt buộc khi không có giá trị nào trong :values tồn tại.',
        'same'                 => ':attribute và :other phải khớp.',
        'size'                 => [
            'numeric' => ':attribute phải là :size.',
            'file'    => ':attribute phải là :size kilobytes.',
            'string'  => ':attribute phải là :size ký tự.',
            'array'   => ':attribute phải chứa :size phần tử.',
        ],
        'starts_with'          => ':attribute phải bắt đầu bằng một trong những giá trị sau: :values',
        'timezone'             => ':attribute phải là múi giờ hợp lệ.',
        'uploaded'             => ':attribute tải lên thất bại.',
        'url'                  => ':attribute định dạng không hợp lệ.',
        'uuid'                 => ':attribute phải là UUID hợp lệ.',
        'custom' => [
            'image' => [
                'dimensions' => 'Kích thước hình ảnh của :attribute không hợp lệ. Kích thước tối thiểu là 100x100 và kích thước tối đa là 2000x2000 pixel.',
            ],
        ],
        'attributes' => [],
    ],

];
