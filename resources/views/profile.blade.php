@extends('layouts.main')

@section('title', 'Profile - Portofolio M Ghiffari')

@section('content')
<style>
    .profile-wrapper {
        background: linear-gradient(135deg, #eaf3ff, #ffffff);
        padding: 70px 0;
        min-height: 75vh;
    }

    .profile-box {
        background: #ffffff;
        border: 1px solid #e5eaf1;
        border-radius: 18px;
        box-shadow: 0 12px 30px rgba(23, 43, 77, 0.06);
        overflow: hidden;
    }

    .profile-top {
        background: linear-gradient(135deg, #2478f2, #155fc7);
        color: #ffffff;
        padding: 36px 24px;
        text-align: center;
    }

    .profile-badge-icon {
        width: 82px;
        height: 82px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.18);
        border: 2px solid rgba(255, 255, 255, 0.4);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 2.3rem;
        margin-bottom: 12px;
    }

    .profile-detail-item {
        background: #f5f8fc;
        border: 1px solid #e5eaf1;
        border-radius: 12px;
        padding: 14px 18px;
        margin-bottom: 12px;
    }

    .profile-detail-item:last-child {
        margin-bottom: 0;
    }
</style>

<section class="profile-wrapper">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="profile-box">
                    <div class="profile-top">
                        <div class="profile-badge-icon">👤</div>
                        <h1 class="h2 fw-bold mb-0">Profile</h1>
                    </div>

                    <div class="p-4 p-md-5">
                        <div class="profile-detail-item">
                            <p class="mb-0 fw-semibold">Nama: M Ghiffari</p>
                        </div>

                        <div class="profile-detail-item">
                            <p class="mb-0 fw-semibold">NIM: 13242520064</p>
                        </div>

                        <div class="profile-detail-item">
                            <p class="mb-0 fw-semibold">Prodi: Teknologi Informasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection