<!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ url('images/user.png') }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nama User</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="../../admin.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="/waktu/index">
                            <i class="material-icons">text_fields</i>
                            <span> Waktu Operasional</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Pemesanan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pemesananbaru.html">Pemesanan Baru</a>
                            </li>
                            <li>
                                <a href="member.html">Member</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="detailpemesanan.html">
                            <i class="material-icons">text_fields</i>
                            <span>Detail Pemesanan</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Request</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="requestperubahan.html">Request Perubahan</a>
                            </li>
                            <li>
                                <a href="requestpembatalan.html">Request Pembatalan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Data</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/treatment/index">Treatment</a>
                            </li>
                            <li>
                                <a href="/pegawai/index">Pegawai</a>
                            </li>
                            <li>
                                <a href="/terapis/index">Terapis</a>
                            </li>
                            <li>
                                <a href="/reseller/index">Reseller</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="/treatment/index">
                            <i class="material-icons">text_fields</i>
                            <span> Treatment</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="/pegawai/index">
                            <i class="material-icons">text_fields</i>
                            <span> Pegawai</span>
                        </a>
                    </li>

                    <li>
                        <a href="/terapis/index">
                            <i class="material-icons">text_fields</i>
                            <span> Terapis</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="absensiterapis.html">
                            <i class="material-icons">text_fields</i>
                            <span>Absensi Terapis</span>
                        </a>
                    </li>


                    <li>
                        <a href="statuspembayaran.html">
                            <i class="material-icons">text_fields</i>
                            <span>Status Pembayaran</span>
                        </a>
                    </li>


            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">New Balinese Mobile Spa</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
