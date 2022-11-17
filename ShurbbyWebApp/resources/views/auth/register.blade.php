<link rel = "stylesheet" href = "/css/register.css">
@extends('layouts.login-register')

@section('header')

<x-header label="เข้าสู่ระบบ"/>

@endsection

@section('inside-body')
<div class="register-framework">
    <div class="register-head-topic-description">
        <div class="register-head-topic">
            ยินดีต้อนรับสู่ Shrubby
        </div>
        <div class="register-head-description">
            สังคมแบ่งปันประสบการณ์เกี่ยวกับต้นไม้
        </div>
    </div>
    <div class="register-body">
        <div class="register-body-topic">
            สมัครสมาชิก
        </div>
        <form class="register-form-section" method="POST" action="{{ route('register') }}" id="register-form">
            @csrf
            <div class="register-form-user-info">
                <div class="register-form-user-info-topic">
                    ข้อมูลผู้ใช้งาน
                </div>
                <div class="register-form-input-group" form="register-form">
                    <div class="register-form-topic">
                        ชื่อแสดง
                    </div>
                    <input  type="text"
                            class="register-form-input"
                            name="alias"
                            id="alias"
                            value="{{ old('alias') }}"
                            autofocus placeholder="shrubbynarak"
                    >
                    @error('alias')
                        <span class="invalid-feedback" role="alert">
                            <small style="white">{{ $message }}</small>
                        </span>
                    @enderror
                </div>

                <div class="register-form-input-group" form="register-form">
                    <div class="register-form-topic">
                        ชื่อบัญชีผู้ใช้
                    </div>
                    <input  type="text"
                            class="register-form-input"
                            name="username"
                            id="username"
                            autofocus placeholder="@shrubbynarak"
                            value="@"
                            pattern="@.+"
                            title="กรุณาใส่ข้อมูลขึ้นต้นด้วย '@'"
                    >
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <small style="white">{{ $message }}</small>
                        </span>
                    @enderror
                    <div class="register-form-comment">
                        ชื่อบัญชีผู้ใช้จะไม่สามารถเปลี่ยนแปลงได้ในภายหลัง
                    </div>
                </div>

                <div class="register-form-input-group" form="register-form">
                        <div class="register-form-topic">
                            อีเมล
                        </div>
                        <input  type="email"
                                class="register-form-input"
                                name="email"
                                id="email"
                                value="{{ old('email') }}"
                                autofocus placeholder="shrubby@gmail.com"
                        >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <small style="white">{{ $message }}</small>
                            </span>
                        @enderror
                </div>
                
                <div class="register-form-input-group" form="register-form">
                        <div class="register-form-topic">
                            รหัสผ่าน
                        </div>
                        <input  type="password"
                                class="register-form-input"
                                name="password"
                                id="password"
                                autofocus placeholder="รหัสผ่าน"
                        >
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <small style="white">{{ $message }}</small>
                            </span>
                        @enderror
                </div>

                <div class="register-form-input-group" form="register-form">
                        <div class="register-form-topic">
                            ยืนยันรหัสผ่าน
                        </div>
                        <input  type="password"
                                class="register-form-input"
                                name="password_confirmation"
                                id="password_confirm"
                                autofocus placeholder="ยืนยันรหัสผ่าน"
                        >
                </div>
            </div>

            <div class="register-form-privacy-info">
                <div class="register-form-privacy-info-topic">
                    ข้อมูลส่วนตัว
                </div>
                <div class="register-form-input-group" form="register-form">
                    <div class="register-form-topic" form="register-form">
                        วันเกิด
                    </div>
                    <input  type="date"
                            class="register-form-input"
                            name="birthdate"
                            value="{{ old('birthdate') }}"
                            id="birthdate"
                    >
                    @error('birthdate')
                        <span class="invalid-feedback" role="alert">
                            <small style="white">{{ $message }}</small>
                        </span>
                    @enderror
                </div>

                <div class="register-form-input-group" form="register-form">
                    <div class="register-form-topic">
                        เพศ
                    </div>
                    <select name="gender"
                            id="gender"
                            class="register-form-input">
                        <option value="undefine">ไม่ระบุ</option>
                        <option value="male">ชาย</option>
                        <option value="female">หญิง</option>
                        <option value="custom">กำหนดเอง</option>
                    </select>
                </div>

                <div class="register-form-input-group" form="register-form">
                    <div class="register-form-topic">
                        หมายเลขโทรศัพท์
                    </div>
                    <input  type="text"
                            class="register-form-input"
                            name="telNum"
                            id="telNum"
                            value="{{ old('telNum') }}"
                            autofocus placeholder="081-234-56xx"
                    >
                    @error('telNum')
                        <span class="invalid-feedback" role="alert">
                            <small style="white">{{ $message }}</small>
                        </span>
                    @enderror
                </div>

                <div class="register-form-input-group" id="address_text" form="register-form">
                    <div class="register-form-topic">
                        ที่อยู่
                    </div>
                    <textarea   placeholder="ที่อยู่" 
                                name="address_info" 
                                id="address_info"
                                class="register-form-input-text-area">{{ old('address_info') }}</textarea>
                    @error('address_info')
                        <span class="invalid-feedback" role="alert">
                            <small style="white">{{ $message }}</small>
                        </span>
                    @enderror
                </div>
            </div>
        </form>

        <div class="register-button-section">
            <button class="register-register-btn" type="submit" form="register-form">
                สมัครสมาชิก
            </button>
        </div>
    </div>
</div>
@endsection