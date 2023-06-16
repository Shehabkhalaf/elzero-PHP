<?php
echo '<pre>';
  print_r([
    "FrontEnd"=>[
      0 => "HTML",
      "CSS",
      "JS"=>[
        "Vuejs"=>[
          2=>"v2",
          3=>"v3"
        ],
        0=>"Reactjs",
        1=>"Svelte"
      ]],
    "BackEnd"=>[
      0=>"PHP","MySQL","Security"
    ],
    0=>"Git",
    "Github",
    "Testing"=>[
      0=>"Unit Testing",
      "End To End",
      "Integration"
    ]
    ]);
echo '</pre>';