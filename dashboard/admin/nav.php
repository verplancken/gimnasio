        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
             <?php include('./breadgrum-log.php'); ?>
        </header>


        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">BBBootstrap</span> </a>

                    <div class="nav_list">
                        <a href="index.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                        <a href="new_entry.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Nuevo Registro</span> </a>
                        <a href="payments.php" class="nav_link">  <i class='bx bx-dollar-circle nav_icon'></i> <span class="nav_name">Pago</span> </a>

                          <li class="nav-item dropdown nav_link">
                             <i class='bx bxs-face'></i>

                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="nav_name" style="color: #AFA5D9">Miembros</span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="table_view.php">Ver Miembro</a>
                              <a class="dropdown-item" href="view_mem.php">Editar Miembros</a>
                            </div>
                          </li>

                        <a href="new_health_status.php" class="nav_link">  <i class='bx bxs-capsule nav_icon'></i> <span class="nav_name">Estado de Salud</span> </a>

                          <li class="nav-item dropdown nav_link">
                              <i class='bx bx-message-square-detail nav_icon'></i>

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="nav_name" style="color: #AFA5D9">Suscripción</span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="new_plan.php">Nueva Suscripción</a>
                              <a class="dropdown-item" href="view_plan.php">Editar Detalles de Suscripción</a>
                            </div>
                          </li>

                          <li class="nav-item dropdown nav_link">
                              <i class='bx bx-receipt nav_icon'></i>

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="nav_name" style="color: #AFA5D9">Vista General</span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="over_members_month.php">Miembros x Mes</a>
                              <a class="dropdown-item" href="over_members_year.php">Miembros x Año</a>
                              <a class="dropdown-item" href="revenue_month.php">Entradas x Mes</a>
                            </div>
                          </li>

                          <li class="nav-item dropdown nav_link">
                              <i class='bx bx-clipboard nav_icon' ></i>

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="nav_name" style="color: #AFA5D9">Rutina de Ejercicios</span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="new_plan.php"></a>
                              <a class="dropdown-item" href="addroutine.php">Agregar Rutina</a>
                              <a class="dropdown-item" href="editroutine.php">Editar Rutina</a>
                              <a class="dropdown-item" href="viewroutine.php">Ver Rutina</a>
                            </div>
                          </li>

                        <a href="more-userprofile.php" class="nav_link"> <i class='bx bx-user-circle nav_icon'></i></i>
                            <span class="nav_name">Perfil</span>
                        </a>
                    </div>

                </div>

                <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar Sesión</span> </a>

            </nav>
        </div>