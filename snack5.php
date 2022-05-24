<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e 
suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->


<?php
$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ut ipsum voluptate doloremque minima dolorem assumenda magni sapiente doloribus praesentium, veritatis molestias quaerat dolore qui voluptates porro, laboriosam mollitia est fugiat. Deserunt porro minus iusto debitis explicabo quam dolorem, alias qui dignissimos exercitationem, facere voluptas id magni laborum eligendi possimus eum iste. Quos minus accusantium tempora, doloribus, tenetur suscipit possimus accusamus quam libero nobis ad in doloremque necessitatibus culpa fuga numquam at excepturi. Iusto amet quae voluptate officia debitis, libero itaque magni deserunt! Doloribus voluptate commodi aut necessitatibus, distinctio voluptates ullam vel quia adipisci, repellat sequi sint culpa, aliquid minus.';
$paragrafoEsploso = explode('.', $paragrafo);

var_dump($paragrafoEsploso);

foreach($paragrafoEsploso as $newPar){
    echo "{$newPar} <br>";
}


?>

