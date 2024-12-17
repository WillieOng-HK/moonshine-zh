<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 驗證語言行
    |--------------------------------------------------------------------------
    |
    | 以下語言行包含驗證器類使用的預設錯誤訊息。
    | 一些規則具有多個版本，例如大小規則。您可以根據需求進行調整。
    |
    */

    'accepted' => ':attribute 必須被接受。',
    'accepted_if' => '當 :other 是 :value 時，:attribute 必須被接受。',
    'active_url' => ':attribute 不是有效的網址。',
    'after' => ':attribute 必須是 :date 之後的日期。',
    'after_or_equal' => ':attribute 必須是 :date 當天或之後的日期。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、數字、連字符和底線。',
    'alpha_num' => ':attribute 只能包含字母和數字。',
    'array' => ':attribute 必須是陣列。',
    'before' => ':attribute 必須是 :date 之前的日期。',
    'before_or_equal' => ':attribute 必須是 :date 當天或之前的日期。',
    'between' => [
        'array' => ':attribute 必須包含 :min 到 :max 個項目。',
        'file' => ':attribute 必須在 :min 到 :max KB 之間。',
        'numeric' => ':attribute 必須介於 :min 和 :max 之間。',
        'string' => ':attribute 必須在 :min 到 :max 個字元之間。',
    ],
    'boolean' => ':attribute 欄位必須為 true 或 false。',
    'confirmed' => ':attribute 確認不一致。',
    'current_password' => '密碼不正確。',
    'date' => ':attribute 不是有效的日期。',
    'date_equals' => ':attribute 必須是等於 :date 的日期。',
    'date_format' => ':attribute 不符合格式 :format。',
    'declined' => ':attribute 必須被拒絕。',
    'declined_if' => '當 :other 是 :value 時，:attribute 必須被拒絕。',
    'different' => ':attribute 和 :other 必須不同。',
    'digits' => ':attribute 必須是 :digits 位數字。',
    'digits_between' => ':attribute 必須在 :min 到 :max 位數字之間。',
    'dimensions' => ':attribute 圖片尺寸無效。',
    'distinct' => ':attribute 欄位有重複值。',
    'email' => ':attribute 必須是有效的電子郵件地址。',
    'ends_with' => ':attribute 必須以以下之一結尾: :values。',
    'enum' => '所選的 :attribute 無效。',
    'exists' => '所選的 :attribute 無效。',
    'file' => ':attribute 必須是檔案。',
    'filled' => ':attribute 欄位必須有值。',
    'gt' => [
        'array' => ':attribute 必須包含多於 :value 個項目。',
        'file' => ':attribute 必須大於 :value KB。',
        'numeric' => ':attribute 必須大於 :value。',
        'string' => ':attribute 必須多於 :value 個字元。',
    ],
    'gte' => [
        'array' => ':attribute 必須包含 :value 個或更多項目。',
        'file' => ':attribute 必須大於或等於 :value KB。',
        'numeric' => ':attribute 必須大於或等於 :value。',
        'string' => ':attribute 必須大於或等於 :value 個字元。',
    ],
    'image' => ':attribute 必須是圖片。',
    'in' => '所選的 :attribute 無效。',
    'in_array' => ':attribute 欄位不存在於 :other 中。',
    'integer' => ':attribute 必須是整數。',
    'ip' => ':attribute 必須是有效的 IP 地址。',
    'ipv4' => ':attribute 必須是有效的 IPv4 地址。',
    'ipv6' => ':attribute 必須是有效的 IPv6 地址。',
    'json' => ':attribute 必須是有效的 JSON 字串。',
    'lt' => [
        'array' => ':attribute 必須少於 :value 個項目。',
        'file' => ':attribute 必須小於 :value KB。',
        'numeric' => ':attribute 必須小於 :value。',
        'string' => ':attribute 必須少於 :value 個字元。',
    ],
    'lte' => [
        'array' => ':attribute 不能超過 :value 個項目。',
        'file' => ':attribute 必須小於或等於 :value KB。',
        'numeric' => ':attribute 必須小於或等於 :value。',
        'string' => ':attribute 必須小於或等於 :value 個字元。',
    ],
    'mac_address' => ':attribute 必須是有效的 MAC 位址。',
    'max' => [
        'array' => ':attribute 不能超過 :max 個項目。',
        'file' => ':attribute 不能大於 :max KB。',
        'numeric' => ':attribute 不能大於 :max。',
        'string' => ':attribute 不能超過 :max 個字元。',
    ],
    'mimes' => ':attribute 必須是類型為 :values 的檔案。',
    'mimetypes' => ':attribute 必須是類型為 :values 的檔案。',
    'min' => [
        'array' => ':attribute 必須至少有 :min 個項目。',
        'file' => ':attribute 必須至少 :min KB。',
        'numeric' => ':attribute 必須至少為 :min。',
        'string' => ':attribute 必須至少 :min 個字元。',
    ],
    'multiple_of' => ':attribute 必須是 :value 的倍數。',
    'not_in' => '所選的 :attribute 無效。',
    'not_regex' => ':attribute 格式無效。',
    'numeric' => ':attribute 必須是數字。',
    'present' => ':attribute 欄位必須存在。',
    'prohibited' => ':attribute 欄位被禁止。',
    'prohibited_if' => '當 :other 是 :value 時，:attribute 欄位被禁止。',
    'prohibited_unless' => '除非 :other 位於 :values 中，否則 :attribute 欄位被禁止。',
    'prohibits' => ':attribute 欄位禁止 :other 出現。',
    'regex' => ':attribute 格式無效。',
    'required' => ':attribute 欄位是必填的。',
    'required_array_keys' => ':attribute 欄位必須包含以下條目: :values。',
    'required_if' => '當 :other 是 :value 時，:attribute 欄位是必填的。',
    'required_unless' => '除非 :other 位於 :values 中，否則 :attribute 欄位是必填的。',
    'required_with' => '當 :values 存在時，:attribute 欄位是必填的。',
    'required_with_all' => '當 :values 都存在時，:attribute 欄位是必填的。',
    'required_without' => '當 :values 不存在時，:attribute 欄位是必填的。',
    'required_without_all' => '當 :values 都不存在時，:attribute 欄位是必填的。',
    'same' => ':attribute 和 :other 必須相符。',
    'size' => [
        'array' => ':attribute 必須包含 :size 個項目。',
        'file' => ':attribute 必須是 :size KB。',
        'numeric' => ':attribute 必須是 :size。',
        'string' => ':attribute 必須是 :size 個字元。',
    ],
    'starts_with' => ':attribute 必須以以下之一開頭: :values。',
    'string' => ':attribute 必須是字串。',
    'timezone' => ':attribute 必須是有效的時區。',
    'unique' => ':attribute 已經被使用。',
    'uploaded' => ':attribute 上傳失敗。',
    'url' => ':attribute 必須是有效的網址。',
    'uuid' => ':attribute 必須是有效的 UUID。',

    /*
    |--------------------------------------------------------------------------
    | 自訂驗證語言行
    |--------------------------------------------------------------------------
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => '自訂訊息',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | 自訂驗證屬性
    |--------------------------------------------------------------------------
    */

    'attributes' => [],

];
