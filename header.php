<?php

/**
 * 
 * This is the header
 * 
 * @package thrive-bureau
 * 
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(  ) ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head() ?>
</head>
<body <?php body_class(  ) ?>>

    <?php
        if(function_exists('wp_body_open')){
            wp_body_open();
        }
    ?>

    <header>
        <div class="header-main">
            <div class="logo">
                <a href="https://codepen.io/anupkumar92/"><img src="https://www.images.cybrosys.com/images/cybro-logo-color.png"></a>
            </div>
            <div id="nav-icon1">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class='menu'>
                <ul>
                    <li class='active'><a href='#'>Home</a></li>
                    <li>
                        <a href='#'>Apps <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="megamenu">
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">Finance</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                </ul>
                            </div>
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">Sales</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                </ul>
                            </div>
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">Websites</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                </ul>
                            </div>
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">Inventory & MRP</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                </ul>
                            </div>
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">HUMAN RESOURCES</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                </ul>
                            </div>
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">MARKETING</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                </ul>
                            </div>
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">PRODUCTIVITY</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                </ul>
                            </div>
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">SERVICES</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Odoo</a>
                        <span class="fa-solid fa-chevron-down"></span>
                        <div class="megamenu-2">
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">Odoo ERP</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                </ul>
                            </div>
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">Industries</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                </ul>
                            </div>
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">Field of Experties</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                </ul>
                            </div>
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">Odoo Comperison</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                </ul>
                            </div>
                            <div class="megamenuitems">
                                <h3 class="mega-menu-heading">Other</h3>
                                <ul>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><a href="#">Spearshet (Bl)</a></li>
                                    <li><a href="#">Documents</a></li>
                                    <li><a href="#">Sign</a></li>
                                    <li><a href="#">Accounting</a></li>
                                    <li><a href="#">Invoicing</a></li>
                                    <li><a href="#">Expenses</a></li>
                                    <li><img src="https://www.images.cybrosys.com/images/odoo-book-amazon.jpg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    </li>
                    <li><a href='#'>Implemention</a></li>
                    <li><a href='#'>Training</a></li>
                    <li><a href='#'>Support</a></li>
                    <li><a href='#'>Resource</a></li>
                    <li><a href='#'>Blog</a></li>
                    <li><a href='#'>Company</a></li>
                </ul>
            </nav>
        </div>
    </header>