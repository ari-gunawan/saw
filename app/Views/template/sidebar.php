<!--aside open-->
<nav class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="index.php">
            <img src="<?= base_url() ?>/assets/images/brand/BRI.png" class="header-brand-img desktop-lgo" alt="Azea logo">
            <img src="<?= base_url() ?>/assets/images/brand/logo1.png" class="header-brand-img dark-logo" alt="Azea logo">
            <img src="<?= base_url() ?>/assets/images/brand/BRI-1.png" class="header-brand-img mobile-logo" alt="Azea logo">
            <img src="<?= base_url() ?>/assets/images/brand/BRI-1.png" class="header-brand-img darkmobile-logo" alt="Azea logo">
        </a>
    </div>

    <ul class="side-menu app-sidebar3">
        <!-- <li class="side-item side-item-category">Main</li> -->
        <li class="slide">
            <a class="side-menu__item" href="<?= base_url('login') ?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 576 512">
                    <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c.2 35.5-28.5 64.3-64 64.3H128.1c-35.3 0-64-28.7-64-64V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24zM352 224a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zm-96 96c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H256z" />
                </svg>
                <span class="side-menu__label">Dashboard</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="<?= base_url('ListKaryawan') ?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 640 512">
                    <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                </svg>
                <span class="side-menu__label">Data Karyawan</span>
            </a>
        </li>
        <!-- <li class="slide">
            <a class="side-menu__item" href="<?= base_url('perhitungan') ?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24" >
                    <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM11.03 17.66C11.32 17.95 11.32 18.43 11.03 18.72C10.88 18.87 10.69 18.94 10.5 18.94C10.31 18.94 10.12 18.87 9.97 18.72L8.25 17L6.53 18.72C6.38 18.86 6.19 18.94 6 18.94C5.81 18.94 5.62 18.87 5.47 18.72C5.18 18.43 5.18 17.95 5.47 17.66L7.19 15.94L5.47 14.22C5.18 13.93 5.18 13.45 5.47 13.16C5.76 12.87 6.24 12.87 6.53 13.16L8.25 14.88L9.97 13.16C10.26 12.87 10.74 12.87 11.03 13.16C11.32 13.45 11.32 13.93 11.03 14.22L9.31 15.94L11.03 17.66ZM10.5 8.81H6C5.59 8.81 5.25 8.47 5.25 8.06C5.25 7.65 5.59 7.31 6 7.31H10.5C10.91 7.31 11.25 7.65 11.25 8.06C11.25 8.47 10.91 8.81 10.5 8.81ZM18 18.56H13.5C13.09 18.56 12.75 18.22 12.75 17.81C12.75 17.4 13.09 17.06 13.5 17.06H18C18.41 17.06 18.75 17.4 18.75 17.81C18.75 18.22 18.41 18.56 18 18.56ZM18 14.81H13.5C13.09 14.81 12.75 14.47 12.75 14.06C12.75 13.65 13.09 13.31 13.5 13.31H18C18.41 13.31 18.75 13.65 18.75 14.06C18.75 14.47 18.41 14.81 18 14.81ZM18 8.81H16.52V10.31C16.52 10.72 16.18 11.06 15.77 11.06C15.36 11.06 15.02 10.72 15.02 10.31V8.81H13.5C13.09 8.81 12.75 8.47 12.75 8.06C12.75 7.65 13.09 7.31 13.5 7.31H15.02V5.81C15.02 5.4 15.36 5.06 15.77 5.06C16.18 5.06 16.52 5.4 16.52 5.81V7.31H18C18.41 7.31 18.75 7.65 18.75 8.06C18.75 8.47 18.41 8.81 18 8.81Z" fill="#292D32" />
                </svg>
                <span class="side-menu__label">Perhitungan</span>
            </a>
        </li> -->
        <!-- <li class="slide">
            <a class="side-menu__item" href="<?= base_url('reportData') ?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24" >
                    <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM11.03 17.66C11.32 17.95 11.32 18.43 11.03 18.72C10.88 18.87 10.69 18.94 10.5 18.94C10.31 18.94 10.12 18.87 9.97 18.72L8.25 17L6.53 18.72C6.38 18.86 6.19 18.94 6 18.94C5.81 18.94 5.62 18.87 5.47 18.72C5.18 18.43 5.18 17.95 5.47 17.66L7.19 15.94L5.47 14.22C5.18 13.93 5.18 13.45 5.47 13.16C5.76 12.87 6.24 12.87 6.53 13.16L8.25 14.88L9.97 13.16C10.26 12.87 10.74 12.87 11.03 13.16C11.32 13.45 11.32 13.93 11.03 14.22L9.31 15.94L11.03 17.66ZM10.5 8.81H6C5.59 8.81 5.25 8.47 5.25 8.06C5.25 7.65 5.59 7.31 6 7.31H10.5C10.91 7.31 11.25 7.65 11.25 8.06C11.25 8.47 10.91 8.81 10.5 8.81ZM18 18.56H13.5C13.09 18.56 12.75 18.22 12.75 17.81C12.75 17.4 13.09 17.06 13.5 17.06H18C18.41 17.06 18.75 17.4 18.75 17.81C18.75 18.22 18.41 18.56 18 18.56ZM18 14.81H13.5C13.09 14.81 12.75 14.47 12.75 14.06C12.75 13.65 13.09 13.31 13.5 13.31H18C18.41 13.31 18.75 13.65 18.75 14.06C18.75 14.47 18.41 14.81 18 14.81ZM18 8.81H16.52V10.31C16.52 10.72 16.18 11.06 15.77 11.06C15.36 11.06 15.02 10.72 15.02 10.31V8.81H13.5C13.09 8.81 12.75 8.47 12.75 8.06C12.75 7.65 13.09 7.31 13.5 7.31H15.02V5.81C15.02 5.4 15.36 5.06 15.77 5.06C16.18 5.06 16.52 5.4 16.52 5.81V7.31H18C18.41 7.31 18.75 7.65 18.75 8.06C18.75 8.47 18.41 8.81 18 8.81Z" fill="#292D32" />
                </svg>
                <span class="side-menu__label">Report</span>
            </a>
        </li> -->
        <li class="slide">
            <a class="side-menu__item" href="<?= base_url('updata') ?>">
                <svg width="24" height="24" class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M128 64c0-35.3 28.7-64 64-64H352V128c0 17.7 14.3 32 32 32H512V448c0 35.3-28.7 64-64 64H192c-35.3 0-64-28.7-64-64V336H302.1l-39 39c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l39 39H128V64zm0 224v48H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H128zM512 128H384V0L512 128z" />
                </svg>
                <span class="side-menu__label">Entry Data</span>
            </a>
        </li>
        <!-- <li class="slide">
            <a class="side-menu__item" href="<?= base_url('home/DataKaryawan') ?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 640 512">
                    <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                </svg>
                <span class="side-menu__label">detail</span>
            </a>
        </li> -->
        <!-- <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 384 512">

                    <path d="M336 0h-288C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48v-416C384 21.49 362.5 0 336 0zM192 160c35.35 0 64 28.65 64 64s-28.65 64-64 64S128 259.3 128 224S156.7 160 192 160zM288 416H96c-8.836 0-16-7.164-16-16C80 355.8 115.8 320 160 320h64c44.18 0 80 35.82 80 80C304 408.8 296.8 416 288 416zM240 96h-96C135.2 96 128 88.84 128 80S135.2 64 144 64h96C248.8 64 256 71.16 256 80S248.8 96 240 96z" />
                </svg>
                <span class="side-menu__label">Data Pekerja</span><i class="angle fa-solid fa-chevron-right"></i></a>
            <ul class="slide-menu">
                <li><a href="<?= base_url('home/datapribadi') ?>" class="slide-item"> Data Pribadi</a></li>
                <li><a href="element-colors.php" class="slide-item"> Cuti</a></li>
                <li><a href="elements-display.php" class="slide-item"> Lembur</a></li>
                <li><a href="element-flex.php" class="slide-item"> Data Presensi</a></li>
            </ul>
        </li> -->
        <div class="app-sidebar__toggle d-flex justify-content-center" data-bs-toggle="sidebar">
            <a class="open-toggle" href="javascript:void(0);">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                </svg>
            </a>
        </div>
    </ul>
</nav>
<!--aside closed-->