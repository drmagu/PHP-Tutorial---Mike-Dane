<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>inherit</title>
    </head>
    <body>

        <h1>Inheritance</h1>

        <?php
            class Chef {
                public function makesChicken() {
                    echo "Cooking Chicken";
                }

                public function makesStew() {
                    echo "Cooking Beef Stew";
                }

                public function makesSpecial() {
                    echo "Cooking Spicy BBQ Ribs";
                }
            }

            class ItalianChef extends Chef {

                // overwrite
                public function makesSpecial() {
                    echo "Cooking Chicken Parmesan"; 
                }

                //
                public function makesVeal() {
                    echo "Cooking Veal Scallops in Marsala";
                }
            }
        ?>
        <hr>
        <h4>Chef Cooks</h4>
        <?php $chef = new Chef(); ?>
        chicken: <?= $chef->makesChicken() ?><br>
        special: <?= $chef->makesSpecial() ?><br>
        <hr>
        <h4>Italian Chef Cooks</h4>
        <?php $chef = new ItalianChef(); ?>
        chicken: <?= $chef->makesChicken() ?><br>
        special: <?= $chef->makesSpecial() ?><br>
        veal: <?= $chef->makesVeal() ?><br>
        <hr>
        


        
    </body>
</html>