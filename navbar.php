<?php
    echo '<div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>WebbiSkools</h3>
                    <strong>WS</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-briefcase"></i>
                            About
                        </a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fas fa-copy"></i>
                            Pages
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-image"></i>
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-question"></i>
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-paper-plane"></i>
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
    </div>';
?>