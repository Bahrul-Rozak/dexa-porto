<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <img src="{{ asset('backend/images/ratna.png') }}" alt="">
            <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
            <h5 class="mb-0 fs-20 text-black "><span class="font-w400">Hello,</span> Ratna</h5>
            <p class="mb-0 fs-14 font-w400">ratnacantik@mail.com</p>
        </div>
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="my-wallets.html">Wallet</a></li>
                    <li><a href="tranasactions.html">Transactions</a></li>
                    <li><a href="coin-details.html">Coin Details</a></li>
                    <li><a href="portofolio.html">Portofolio</a></li>
                    <li><a href="market-capital.html">Market Capital</a></li>
                </ul>

            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-077-menu-1"></i>
                    <span class="nav-text">Sections</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.hero.index') }}">Hero</a></li>
                </ul>
            </li>
        </ul>
        <div class="copyright">
            <p><strong>Zenix Crypto Admin Dashboard</strong> © 2021 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>
        </div>
    </div>
</div>