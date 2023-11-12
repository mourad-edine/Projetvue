<template>
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <Link href="/test" class="nav-link">
                        <p>home</p>
                    </Link>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <Link href="/tailwind" class="nav-link">
                        <p>home</p>
                    </Link>
                </li>
            </ul>


        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Test</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <Link href="/test2" class="nav-link ">
                                        <p>liste</p>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link href="/test3" class="nav-link ">
                                        <p>Ajouter</p>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link href="/test4" class="nav-link ">
                                        <p>Modal</p>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link href="/tailwind" class="nav-link ">
                                        <p>nouveau</p>
                                    </Link>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                           <!------------>
                           <slot/>
                        </div>
                        <div class="col-sm-6">
                            <!---------------->
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <footer class="main-footer">


        </footer>
    </div>
</template>
<script setup>
    import { Link } from '@inertiajs/vue3';
</script>