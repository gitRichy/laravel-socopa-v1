<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu pt-3">
            <ul>
                <li>
                    <a href="{{ route('home') }}"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-cube"></i> <span> Parténaires</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('partenaires.index') }}">Liste</a></li>
                        <li><a href="#">Suivis</a></li>
                    </ul>
                </li>
                
                <li class="submenu">
                    <a href="#"><i class="la la-users"></i> <span>Fournisseurs</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('fournisseurs.index') }}">Liste</a></li>
                        <li><a href="{{ route('fournisseurs.suivi') }}">Suivis</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-cubes"></i> <span>Stock</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('entrees.index') }}">Entrées</a></li>
                        <li><a href="{{ route('sorties.index') }}">Sorties</a></li>
                        <li><a href="{{ route('stocks.index') }}">Situation</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-shopping-cart"></i> <span>Achats</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('achats.index') }}">Provision</a></li>
                        <li><a href="#">Divers</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-money-bill"></i> <span>Ventes</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#">Acheminement</a></li>
                        <li><a href="#">Divers</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-coins"></i> <span>Caisse</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#">Mouvements</a></li>
                        <li><a href="#">Situation</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-user"></i> <span> Utilisateurs</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#">Gestionnaires</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-cog"></i> <span> Paramètres</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#">Zones</a></li>
                        <li><a href="#">Sections</a></li>
                        <li><a href="#">Localites</a></li>
                    </ul>
                </li>
                     
            </ul>
        </div>
    </div>
</div>