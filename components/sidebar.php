<div>
    <div class="sidebar">
        <div class="logo-wrapper">
            <div class="sidebar-logo">
                <img src="public/pics/logo-light.png">
            </div>
        </div>

        <div class="sidebar-top">
            <ul class="sidebar-nav">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <li class="<?php if ($i == 2) echo 'active'; ?>">
                        <a href="#">
                            <i class="nav-icon fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>

        <div class="sidebar-bottom">
            <ul class="sidebar-nav">
                <?php for ($i = 0; $i < 2; $i++) : ?>
                    <li>
                        <a href="#">
                            <i class="nav-icon fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>

            <div class="sidebar-account">
                <div class="sidebar-account-img">
                    <div class="avatar">
                        <div class="avatar-content">
                            <img src="public/pics/avatar.jpg">
                        </div>
                    </div>
                </div>

                <div class="sidebar-account-text">
                    <div class="sidebar-account-name">
                        <span>Louise Thompson</span>
                    </div>
                    <div class="sidebar-account-desc">
                        <span>Enterprise plan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="sidebar dark">
        <div class="logo-wrapper">
            <div class="sidebar-logo">
                <img src="public/pics/logo-dark.png">
            </div>
        </div>

        <div class="sidebar-top">
            <ul class="sidebar-nav">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <li class="<?php if ($i == 2) echo 'active'; ?>">
                        <a href="#">
                            <i class="nav-icon fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>

        <div class="sidebar-bottom">
            <ul class="sidebar-nav">
                <?php for ($i = 0; $i < 2; $i++) : ?>
                    <li>
                        <a href="#">
                            <i class="nav-icon fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>

            <div class="sidebar-account">
                <div class="sidebar-account-img">
                    <div class="avatar">
                        <div class="avatar-content">
                            <img src="public/pics/avatar.jpg">
                        </div>
                    </div>
                </div>

                <div class="sidebar-account-text">
                    <div class="sidebar-account-name">
                        <span>Louise Thompson</span>
                    </div>
                    <div class="sidebar-account-desc">
                        <span>Enterprise plan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>