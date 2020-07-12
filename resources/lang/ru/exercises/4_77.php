<?php

return [
    'title' => "«Задержанная» фильтрация",
    'description' =>
        "В разделе 4.4.3 мы видели, что выражения not и lisp-value могут заставить язык запросов выдавать «неправильные» значения, если эти фильтрующие операции применяются к кадрам с несвязанными переменными. " .
        "Придумайте способ избавиться от этого недостатка. Одна из возможностей состоит в том, чтобы проводить «задержанную» фильтрацию, цепляя к кадру «обещание» провести ее, которое выполняется только тогда, когда связано достаточно переменных, чтобы операция стала возможна. " .
        "Можно ждать и проводить фильтрацию только тогда, когда выполнены все остальные операции. Однако из соображений эффективности хотелось бы фильтровать как можно раньше, чтобы уменьшить число порождаемых промежуточных кадров."
];
