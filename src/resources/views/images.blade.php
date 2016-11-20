<?php $name = isset($name) ? $name : 'images' ?>

<div class="file-uploader file-uploader-images" id="{{ $id or uniqid('uploader_') }}" data-max-items="{{ $max or 9999 }}" data-strategy="{{ $strategy or 'default' }}" data-form-name="{{ $name }}" data-items='{!! json_encode(isset($images) ? array_map('asset', (array)$images) : []) !!}' data-item-template="<img src='{URL}' />" multiple>
    <div class="file-uploader-items">
        <button class="file-uploader-picker">+</button>
    </div>
</div>