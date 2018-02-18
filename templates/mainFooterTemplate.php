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
                    <div class ="row">
                        <div class="col-md-12">
                            <h2>this is my web page footer</h2>
                        </div>
                    </div>
                </footer>
mainFooter;

        }
}