<?php
header('Access-Control-Allow-Origin: *');

$reptiles = array(
    "Turtles and Tortoises" => array(
        "Species" => array(
            "Turtle" => array(
                "name" => "Green Sea Turtle",
                "info" => "Green turtles are in fact named for the greenish color of their cartilage and fat, not their shells. In the Eastern Pacific, a group of green turtles that have darker shells are called black turtles by the local community.",
                "lifespan" => "70 to 90 years",
                "eggs" => "110 eggs",
                "diet" => array(
                    "Algae",
                    "Seagrasses",
                    "Discarded",
                    "Fruits",
                    "Vegetables"
                ),
                "size" => array(
                    array(
                        "length" => "31 to 47 inches",
                        "weight" => "150 to 507 pounds")
                ),
                "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Green_turtle_swimming_over_coral_reefs_in_Kona.jpg/800px-Green_turtle_swimming_over_coral_reefs_in_Kona.jpg"
            ),
            "Tortoise" => array(
                "name" => "African Spurred Tortoise",
                "info" => "The African spurred tortoise is also sometimes called the Sulcata tortoise, taken from the Latin word sulcus meaning furrow.",
                "lifespan" => "80 to 100 years",
                "eggs" => "15 to 30 eggs",
                "diet" => array(
                    "Grasses",
                    "Flowers",
                    "Cacti",
                    "Fruits",
                    "Vegetables"
                ),
                "size" => array(
                    "male" => array(
                        "length" => "30 inches",
                        "weight" => "200 pounds"
                    ),
                    "female" => array(
                        "length" => "20 inches",
                        "weight" => "90 pounds"
                    )
                ),
                "image" => "https://animals.sandiegozoo.org/sites/default/files/2016-11/animals_hero_african_spurred_tortoise.jpg"
            )
        ),  
        "image" => "https://www.mos.org/sites/dev-elvis.mos.org/files/images/main/uploads/slides/Pulsar-TvsT-LP.jpg"
    ),

    "Lizards and Snakes" => array(
        "Species" => array(
            "Lizard" => array(
                "name" => "Tokay Gecko",
                "info" => "The tokay gecko is a nocturnal arboreal gecko in the genus Gekko, the true geckos. It is native to Asia and some Pacific Islands.",
                "lifespan" => "10 to 15 years",
                "eggs" => "2 eggs",
                "diet" => array(
                    "Moths",
                    "Locusts",
                    "Grasshoppers",
                    "Beetles",
                    "Crickets"
                ),
                "size" => array(
                    array(
                        "length" => "11 to 15 inches",
                        "weight" => "250 to 350 grams"
                    )
                ),
                "image" => "https://www.thesprucepets.com/thmb/1zB5wH3lUN_erjdx_2YxK23avr4=/4256x0/filters:no_upscale():strip_icc()/a-close-up-of-a-tokay-gecko-96620740-5aa9d01d3418c600362417ff.jpg"
            ),
            "Snake" => array(
                "name" => "Python",
                "info" => "Python is a genus of constricting snakes in the Pythonidae family native to the tropics and subtropics of the Eastern Hemisphere.",
                "lifespan" => "35 years",
                "eggs" => "2 to 100 eggs",
                "diet" => array(
                    "Lizards",
                    "Birds",
                    "Pigs",
                    "Wallabies",
                    "Antelope"
                ),
                "size" => array(
                    array(
                        "length" => "33 feet",
                        "weight" => "250 pounds")
                ),
                "image" => "https://static.scientificamerican.com/sciam/cache/file/DE5D6023-4C04-40D8-90302A38800DC47A_source.jpg?w=590&amp;h=800&amp;2EAD4568-AB4E-4724-9468BA783BE15505"
            )
        ),
        "image" => "https://images.news18.com/ibnlive/uploads/2021/12/venomous-16407094864x3.png"
    ),

    "Crocodiles and Alligators" => array(
        "Species" => array(
            "Crocodile" => array(
                "name" => "Philippine Crocodile",
                "info" => "The Philippine crocodiles is brown with black markings and heavily armored. It has a broad snout for a crocodile.",
                "lifespan" => "70 to 80 years",
                "eggs" => "7 to 30 eggs",
                "diet" => array(
                    "Fish",
                    "Small Mammals",
                    "Aquatic Vertebrates",
                    "Crustaceans",
                    "Frogs"
                ),
                "size" => array(
                    array(
                        "length" => "2.44 to 3 meters",
                        "weight" => "91 kg"
                    )
                ),
                "image" => "https://upload.wikimedia.org/wikipedia/commons/f/f3/Crocodylus_mindorensis_by_Gregg_Yan_01.jpg"
            ),
            "Alligator" => array(
                "name" => "American Alligator",
                "info" => "American alligators are large crocodilians found only in the United States. The animal’s dark skin is armored with small, bony scales called scutes.",
                "lifespan" => "30 to 50 years",
                "eggs" => "35 to 50 eggs",
                "diet" => array(
                    "Turtles",
                    "Snakes",
                    "Small Mammals",
                    "Frogs",
                    "Crustaceans"
                ),
                "size" => array(
                    "male" => array(
                        "length" => "3.4 meters",
                        "weight" => "230 kg"
                    ),
                    "female" => array(
                        "length" => "3.4 meters",
                        "weight" => "230 kg")
                ),
                "image" => "https://natureconservancy-h.assetsadobe.com/is/image/content/dam/tnc/nature/en/photos/tnc_16433572.jpg?crop=0%2C233%2C4000%2C2200&amp;wid=4000&amp;hei=2200&amp;scl=1.0"
            )
        ),
        "image" => "https://d.newsweek.com/en/full/1925521/alligator-crocodile.jpg"
    ),

    "Tuatara" => array(
        "Species" => array(
            "Tuatara" => array(
                "name" => "Northern Tuatara",
                "info" => "Tuatara are New Zealand's largest reptile. He can erect these spines to attract females or when fighting with other males.",
                "lifespan" => "60 years",
                "eggs" => "1 to 19 eggs",
                "diet" => array(
                    "Insects",
                    "Lizards",
                    "Birds",
                    "Eggs",
                    "Beetles"
                ),
                "size" => array(
                    array(
                        "length" => "0.5 meters",
                        "weight" => "1.5 kg"
                    )
                ),
                "image" => "https://upload.wikimedia.org/wikipedia/commons/7/70/Tuatara_%285205719005%29.jpg"
            )
        ),
        "image" => "https://media.wired.com/photos/5b368729ce9419115f46bab4/master/w_1600%2Cc_limit/Tuatara.jpg"
    )
);
echo json_encode(array("reptiles" => $reptiles));
?>