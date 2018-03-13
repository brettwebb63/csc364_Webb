<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/6/2018
 * Time: 10:22 PM
 */
class mainFooterTemplate{
        public static function mainFooter()
        {
            echo <<<mainFooter
                <footer>
                    <div class ="container">
                        <div class ="row">
                            <div class ="footerLeft col-xs-4">
                                <h3 style ='text-decoration: underline #C0B283'>Contact Info</h3>
                                <h5>724-570-8356</h5>
                                <h5>TripleTTiburons@gmail.com</h5>
                                <h5>Tiburon Inc, 1532 Oak Lane, Tiburon,CA, 94920 </h5>
                            </div>
                            <div class="footerCenter col-xs-4">
                                <h3 style ='text-decoration: underline #C0B283'>Our Mission</h3>
                                    <h5>
                                        As a Tiburon owner I know how hard it can be to find quailty products. Our mission is 
                                        to bring you the best product at the fairest price. We try to make the buying process 
                                        as easy as possible so you can get back to improving your Tibuorn.
                                    </h5>
                            </div>
                            <div class="footerRight col-xs-4">
                                    <ul>
                                        <li><a class="active" href="index.php">Home</a></li>
                                        <li><a href="addingAProduct.php">Add A Product</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                        <li><a href="#about">About</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </footer>
mainFooter;

        }
}