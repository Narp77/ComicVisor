{"filter":false,"title":"DefaultController.php","tooltip":"/src/comicvisorBundle/Controller/DefaultController.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":61,"column":8},"end":{"row":62,"column":0},"action":"insert","lines":["",""],"id":425},{"start":{"row":62,"column":0},"end":{"row":62,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":62,"column":8},"end":{"row":63,"column":0},"action":"insert","lines":["",""],"id":426},{"start":{"row":63,"column":0},"end":{"row":63,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":62,"column":8},"end":{"row":67,"column":20},"action":"insert","lines":["$subquery = $this->_em->createQueryBuilder()","         ->select('t.id')","         ->from('yourBundle:Task', 't')","                 ->innerjoin('t.user','u')","                 ->where('u.id = 1')","         ->getDQL();"],"id":427}],[{"start":{"row":67,"column":20},"end":{"row":68,"column":0},"action":"insert","lines":["",""],"id":428},{"start":{"row":68,"column":0},"end":{"row":68,"column":9},"action":"insert","lines":["         "]}],[{"start":{"row":68,"column":9},"end":{"row":69,"column":0},"action":"insert","lines":["",""],"id":429},{"start":{"row":69,"column":0},"end":{"row":69,"column":9},"action":"insert","lines":["         "]}],[{"start":{"row":69,"column":9},"end":{"row":72,"column":59},"action":"insert","lines":["$query = $this->_em->createQueryBuilder()","              ->select('l')","              ->from('yourBundle:Layer', 'l')","          ->where($query->expr()->notIn('l.id', $subquery))"],"id":430}],[{"start":{"row":63,"column":19},"end":{"row":63,"column":20},"action":"remove","lines":["t"],"id":431}],[{"start":{"row":63,"column":19},"end":{"row":63,"column":20},"action":"insert","lines":["c"],"id":432}],[{"start":{"row":64,"column":17},"end":{"row":64,"column":38},"action":"remove","lines":["yourBundle:Task', 't'"],"id":433},{"start":{"row":64,"column":17},"end":{"row":64,"column":44},"action":"insert","lines":["comicvisorBundle:comic','c'"]}],[{"start":{"row":65,"column":10},"end":{"row":66,"column":36},"action":"remove","lines":["       ->innerjoin('t.user','u')","                 ->where('u.id = 1')"],"id":434},{"start":{"row":65,"column":10},"end":{"row":66,"column":59},"action":"insert","lines":[" ->where('c.portadaNombre = :portadaNombre')","           ->setParameter('portadaNombre', $portadaNombre);"]}],[{"start":{"row":66,"column":58},"end":{"row":66,"column":59},"action":"remove","lines":[";"],"id":435}],[{"start":{"row":66,"column":10},"end":{"row":66,"column":11},"action":"remove","lines":[" "],"id":436}],[{"start":{"row":65,"column":10},"end":{"row":65,"column":11},"action":"remove","lines":[" "],"id":437}],[{"start":{"row":65,"column":9},"end":{"row":65,"column":10},"action":"remove","lines":[" "],"id":438}],[{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":[" "],"id":439}],[{"start":{"row":70,"column":24},"end":{"row":70,"column":25},"action":"remove","lines":["l"],"id":440}],[{"start":{"row":70,"column":24},"end":{"row":70,"column":25},"action":"insert","lines":["p"],"id":441}],[{"start":{"row":71,"column":21},"end":{"row":71,"column":44},"action":"remove","lines":["'yourBundle:Layer', 'l'"],"id":442},{"start":{"row":71,"column":21},"end":{"row":71,"column":49},"action":"insert","lines":["'comicvisorBundle:comic','c'"]}],[{"start":{"row":71,"column":39},"end":{"row":71,"column":44},"action":"remove","lines":["comic"],"id":443},{"start":{"row":71,"column":39},"end":{"row":71,"column":40},"action":"insert","lines":["c"]}],[{"start":{"row":71,"column":40},"end":{"row":71,"column":41},"action":"insert","lines":["a"],"id":444}],[{"start":{"row":71,"column":41},"end":{"row":71,"column":42},"action":"insert","lines":["p"],"id":445}],[{"start":{"row":71,"column":42},"end":{"row":71,"column":43},"action":"insert","lines":["i"],"id":446}],[{"start":{"row":71,"column":43},"end":{"row":71,"column":44},"action":"insert","lines":["t"],"id":447}],[{"start":{"row":71,"column":44},"end":{"row":71,"column":45},"action":"insert","lines":["u"],"id":448}],[{"start":{"row":71,"column":45},"end":{"row":71,"column":46},"action":"insert","lines":["l"],"id":449}],[{"start":{"row":71,"column":46},"end":{"row":71,"column":47},"action":"insert","lines":["o"],"id":450}],[{"start":{"row":71,"column":50},"end":{"row":71,"column":51},"action":"remove","lines":["c"],"id":451}],[{"start":{"row":71,"column":50},"end":{"row":71,"column":51},"action":"insert","lines":["p"],"id":452}],[{"start":{"row":72,"column":41},"end":{"row":72,"column":42},"action":"remove","lines":["l"],"id":453}],[{"start":{"row":72,"column":41},"end":{"row":72,"column":42},"action":"insert","lines":["p"],"id":454}],[{"start":{"row":72,"column":45},"end":{"row":72,"column":46},"action":"insert","lines":["c"],"id":455}],[{"start":{"row":72,"column":46},"end":{"row":72,"column":47},"action":"insert","lines":["o"],"id":456}],[{"start":{"row":72,"column":47},"end":{"row":72,"column":48},"action":"insert","lines":["m"],"id":457}],[{"start":{"row":72,"column":48},"end":{"row":72,"column":49},"action":"insert","lines":["i"],"id":458}],[{"start":{"row":72,"column":49},"end":{"row":72,"column":50},"action":"insert","lines":["c"],"id":459}],[{"start":{"row":72,"column":36},"end":{"row":72,"column":37},"action":"remove","lines":["t"],"id":460}],[{"start":{"row":72,"column":35},"end":{"row":72,"column":36},"action":"remove","lines":["o"],"id":461}],[{"start":{"row":72,"column":34},"end":{"row":72,"column":35},"action":"remove","lines":["n"],"id":462}],[{"start":{"row":72,"column":10},"end":{"row":72,"column":11},"action":"insert","lines":[" "],"id":463}],[{"start":{"row":72,"column":11},"end":{"row":72,"column":12},"action":"insert","lines":[" "],"id":464}],[{"start":{"row":72,"column":12},"end":{"row":72,"column":13},"action":"insert","lines":[" "],"id":465}],[{"start":{"row":72,"column":13},"end":{"row":72,"column":14},"action":"insert","lines":[" "],"id":466}],[{"start":{"row":72,"column":65},"end":{"row":72,"column":66},"action":"insert","lines":[";"],"id":467}],[{"start":{"row":72,"column":66},"end":{"row":73,"column":0},"action":"insert","lines":["",""],"id":468},{"start":{"row":73,"column":0},"end":{"row":73,"column":14},"action":"insert","lines":["              "]}],[{"start":{"row":73,"column":14},"end":{"row":74,"column":0},"action":"insert","lines":["",""],"id":469},{"start":{"row":74,"column":0},"end":{"row":74,"column":14},"action":"insert","lines":["              "]}],[{"start":{"row":74,"column":13},"end":{"row":74,"column":14},"action":"remove","lines":[" "],"id":470}],[{"start":{"row":74,"column":12},"end":{"row":74,"column":13},"action":"remove","lines":[" "],"id":471}],[{"start":{"row":74,"column":8},"end":{"row":74,"column":12},"action":"remove","lines":["    "],"id":472}],[{"start":{"row":74,"column":8},"end":{"row":74,"column":55},"action":"insert","lines":["$datos = $query->getQuery()->getSingleResult();"],"id":473}],[{"start":{"row":74,"column":45},"end":{"row":74,"column":46},"action":"remove","lines":["e"],"id":474}],[{"start":{"row":74,"column":44},"end":{"row":74,"column":45},"action":"remove","lines":["l"],"id":475}],[{"start":{"row":74,"column":43},"end":{"row":74,"column":44},"action":"remove","lines":["g"],"id":476}],[{"start":{"row":74,"column":42},"end":{"row":74,"column":43},"action":"remove","lines":["n"],"id":477}],[{"start":{"row":74,"column":41},"end":{"row":74,"column":42},"action":"remove","lines":["i"],"id":478}],[{"start":{"row":74,"column":40},"end":{"row":74,"column":41},"action":"remove","lines":["S"],"id":479}],[{"start":{"row":74,"column":14},"end":{"row":74,"column":15},"action":"insert","lines":["2"],"id":480}],[{"start":{"row":92,"column":95},"end":{"row":92,"column":96},"action":"insert","lines":[","],"id":481}],[{"start":{"row":92,"column":96},"end":{"row":92,"column":97},"action":"insert","lines":[" "],"id":482}],[{"start":{"row":92,"column":97},"end":{"row":92,"column":114},"action":"insert","lines":["'datos' => $datos"],"id":483}],[{"start":{"row":92,"column":103},"end":{"row":92,"column":104},"action":"insert","lines":["2"],"id":484}],[{"start":{"row":92,"column":115},"end":{"row":92,"column":116},"action":"insert","lines":["2"],"id":485}],[{"start":{"row":62,"column":27},"end":{"row":62,"column":28},"action":"remove","lines":["_"],"id":486}],[{"start":{"row":62,"column":27},"end":{"row":62,"column":28},"action":"insert","lines":["$"],"id":487}],[{"start":{"row":69,"column":25},"end":{"row":69,"column":26},"action":"remove","lines":["_"],"id":488}],[{"start":{"row":69,"column":25},"end":{"row":69,"column":26},"action":"insert","lines":["$"],"id":489}],[{"start":{"row":62,"column":19},"end":{"row":62,"column":27},"action":"remove","lines":[" $this->"],"id":490}],[{"start":{"row":62,"column":19},"end":{"row":62,"column":20},"action":"insert","lines":[" "],"id":491}],[{"start":{"row":69,"column":18},"end":{"row":69,"column":25},"action":"remove","lines":["$this->"],"id":492}],[{"start":{"row":72,"column":16},"end":{"row":72,"column":17},"action":"insert","lines":["a"],"id":493}],[{"start":{"row":72,"column":17},"end":{"row":72,"column":18},"action":"insert","lines":["n"],"id":494}],[{"start":{"row":72,"column":18},"end":{"row":72,"column":19},"action":"insert","lines":["d"],"id":495}],[{"start":{"row":65,"column":11},"end":{"row":65,"column":12},"action":"insert","lines":["a"],"id":496}],[{"start":{"row":65,"column":12},"end":{"row":65,"column":13},"action":"insert","lines":["n"],"id":497}],[{"start":{"row":65,"column":13},"end":{"row":65,"column":14},"action":"insert","lines":["d"],"id":498}],[{"start":{"row":72,"column":18},"end":{"row":72,"column":19},"action":"remove","lines":["d"],"id":499}],[{"start":{"row":72,"column":17},"end":{"row":72,"column":18},"action":"remove","lines":["n"],"id":500}],[{"start":{"row":72,"column":16},"end":{"row":72,"column":17},"action":"remove","lines":["a"],"id":501}],[{"start":{"row":72,"column":21},"end":{"row":72,"column":22},"action":"insert","lines":["i"],"id":502}],[{"start":{"row":72,"column":22},"end":{"row":72,"column":23},"action":"insert","lines":["n"],"id":503}],[{"start":{"row":72,"column":22},"end":{"row":72,"column":23},"action":"remove","lines":["n"],"id":504}],[{"start":{"row":72,"column":21},"end":{"row":72,"column":22},"action":"remove","lines":["i"],"id":505}],[{"start":{"row":62,"column":6},"end":{"row":62,"column":7},"action":"insert","lines":["/"],"id":506}],[{"start":{"row":62,"column":7},"end":{"row":62,"column":8},"action":"insert","lines":["*"],"id":507}],[{"start":{"row":72,"column":66},"end":{"row":72,"column":67},"action":"insert","lines":["*"],"id":508}],[{"start":{"row":72,"column":67},"end":{"row":72,"column":68},"action":"insert","lines":["/"],"id":509}],[{"start":{"row":62,"column":7},"end":{"row":62,"column":8},"action":"remove","lines":["*"],"id":510}],[{"start":{"row":62,"column":6},"end":{"row":62,"column":7},"action":"remove","lines":["/"],"id":511}],[{"start":{"row":72,"column":67},"end":{"row":72,"column":68},"action":"remove","lines":["/"],"id":512}],[{"start":{"row":72,"column":66},"end":{"row":72,"column":67},"action":"remove","lines":["*"],"id":513}],[{"start":{"row":62,"column":8},"end":{"row":72,"column":66},"action":"remove","lines":["$subquery = $em->createQueryBuilder()","         ->select('c.id')","         ->from('comicvisorBundle:comic','c')","         ->andwhere('c.portadaNombre = :portadaNombre')","         ->setParameter('portadaNombre', $portadaNombre)","         ->getDQL();","         ","         $query = $em->createQueryBuilder()","              ->select('p')","              ->from('comicvisorBundle:capitulo','p')","              ->where($query->expr()->In('p.idcomic', $subquery));"],"id":514},{"start":{"row":62,"column":8},"end":{"row":67,"column":32},"action":"insert","lines":["$datos = $em->createQueryBuilder()","             ->select('v.nombre,v.portadaNombre, c.numero, c.titulo')","             ->from('comicvisorBundle:comic', 'v')","             ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')","             ->setFirstResult(0)","             ->setMaxResults(6);"]}],[{"start":{"row":65,"column":86},"end":{"row":66,"column":0},"action":"insert","lines":["",""],"id":515},{"start":{"row":66,"column":0},"end":{"row":66,"column":13},"action":"insert","lines":["             "]}],[{"start":{"row":66,"column":13},"end":{"row":67,"column":59},"action":"insert","lines":["->where('c.portadaNombre = :portadaNombre')","           ->setParameter('portadaNombre', $portadaNombre);"],"id":516}],[{"start":{"row":67,"column":58},"end":{"row":67,"column":59},"action":"remove","lines":[";"],"id":517}],[{"start":{"row":67,"column":11},"end":{"row":67,"column":12},"action":"insert","lines":[" "],"id":518}],[{"start":{"row":67,"column":12},"end":{"row":67,"column":13},"action":"insert","lines":[" "],"id":519}],[{"start":{"row":66,"column":22},"end":{"row":66,"column":23},"action":"remove","lines":["c"],"id":520}],[{"start":{"row":66,"column":22},"end":{"row":66,"column":23},"action":"insert","lines":["v"],"id":521}],[{"start":{"row":62,"column":8},"end":{"row":62,"column":14},"action":"remove","lines":["$datos"],"id":522},{"start":{"row":62,"column":8},"end":{"row":62,"column":13},"action":"insert","lines":["query"]}],[{"start":{"row":62,"column":8},"end":{"row":62,"column":9},"action":"insert","lines":["&"],"id":523}],[{"start":{"row":62,"column":8},"end":{"row":62,"column":9},"action":"remove","lines":["&"],"id":524}],[{"start":{"row":62,"column":8},"end":{"row":62,"column":9},"action":"insert","lines":["$"],"id":525}]]},"ace":{"folds":[],"scrolltop":767,"scrollleft":0,"selection":{"start":{"row":62,"column":9},"end":{"row":62,"column":9},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":19,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1461926061513,"hash":"186694675e063d880038da1902745767d77d2635"}