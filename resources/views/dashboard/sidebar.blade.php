<div class="overlay"></div>
<div class="search-overlay"></div>

<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">
    
    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu mb-2">
                <a href="{{route('dashboard')}}" aria-expanded="false" class="{{ Request::is('dashboard') ? 'dropdown-toggle active' : 'dropdown-toggle' }}">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                    {{-- <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div> --}}
                </a>
            </li>
            <li class="menu">
                <a href="{{route('services.index')}}" aria-expanded="false" class="{{ Request::is('services') ? 'dropdown-toggle active' : 'dropdown-toggle' }}">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                        <span>Services</span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>

</div>
<!--  END SIDEBAR  -->

<script>
    // Sélectionnez tous les éléments de menu avec l'attribut data-active="true"
    var menuItems = document.querySelectorAll('.dropdown-toggle[data-active="true"]');

    // Parcourez chaque élément de menu
    menuItems.forEach(function(menuItem) {
        // Ajoutez la classe "active" à l'élément de menu
        menuItem.classList.add('active');
    });
</script>

<style>
    .dropdown-toggle.active {
        background: #fff;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        border-radius: 6px;
        color: #0e1726;
    }
</style>