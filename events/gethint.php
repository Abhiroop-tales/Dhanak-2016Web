<?php
// Array with names
$a[] = "Solo singing";
$a[] = "rhythm";
$a[] = "music";
$a[] = "solo";
$a[] = "karaoke";
$a[] = "sing";
$a[] = "Duet singing";
$a[] = "raag";
$a[] = "two";
$a[] = "instrument";
$a[] = "Battle of Bands";
$a[] = "In Sync";
$a[] = "band";
$a[] = "drum kit";
$a[] = "group";
$a[] = "Solo dance";
$a[] = "rock";
$a[] = "contemporary";
$a[] = "lasya";
$a[] = "classical";
$a[] = "hip hop";
$a[] = "drama";
$a[] = "dance";
$a[] = "props";
$a[] = "Happy Feet";
$a[] = "western";
$a[] = "theartrical";
$a[] = "street play";
$a[] = "performing arts";
$a[] = "mime";
$a[] = "theatre";
$a[] = "Channel Surfing";
$a[] = "fun";
$a[] = "channel";
$a[] = "performing";
$a[] = "team";
$a[] = "debate";
$a[] = "papers";
$a[] = "JAM";
$a[] = "speak";
$a[] = "vocabulary";
$a[] = "Shipwreck";
$a[] = "personality";
$a[] = "role";
$a[] = "speaking";
$a[] = "Spell Bee";
$a[] = "film making";
$a[] = "take 16";
$a[] = "movie";
$a[] = "selfie le le re";
$a[] = "selfie competition";
$a[] = "photo";
$a[] = "photography";
$a[] = "the picturesque";
$a[] = "photograph";
$a[] = "camera";
$a[] = "the story in you";
$a[] = "story writing";
$a[] = "story";
$a[] = "Sketching";
$a[] = "Basquejar";
$a[] = "pencil";
$a[] = "doodle drawing";
$a[] = "doodle";
$a[] = "Face painting";
$a[] = "behind the mask";
$a[] = "painting";
$a[] = "Junk art";
$a[] = "parinati";
$a[] = "trash";
$a[] = "waste";
$a[] = "t shirt painting";
$a[] = "blank space";
$a[] = "painting";
$a[] = "general quiz";
$a[] = "quizzing";
$a[] = "knowledge";
$a[] = "mela quiz";
$a[] = "entertainment quiz";
$a[] = "sports quiz";
$a[] = "spotivnaya victorina";
$a[] = "sports";
$a[] = "theme quiz";
$a[] = "retro quiz";
$a[] = "beg borrow steal";
$a[] = "borrow";
$a[] = "steal";
$a[] = "book of secrets";
$a[] = "treasure hunt";
$a[] = "maze";
$a[] = "crime scene";
$a[] = "clueless";
$a[] = "sherlock";
$a[] = "solve";
$a[] = "dostana";
$a[] = "friendship";
$a[] = "friends";
$a[] = "dumb charades";
$a[] = "picture abhi baaki hai";
$a[] = "act";
$a[] = "acting";
$a[] = "movies";
$a[] = "insta chef";
$a[] = "cooking";
$a[] = "recipe";
$a[] = "mr miss dhanak";
$a[] = "personality competition";
$a[] = "tashan";
$a[] = "fashion show";
$a[] = "clothes";
$a[] = "fashion";
$a[] = "design";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>
