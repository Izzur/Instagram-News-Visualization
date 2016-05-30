<?php
// LOGIC
    set_include_path(get_include_path() . PATH_SEPARATOR . './lib/easyrdf/lib');
    require_once "EasyRdf.php";
    require_once "html_tag_helpers.php";
    // Setup some additional prefixes for DBpedia
    EasyRdf_Namespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
    EasyRdf_Namespace::set('konsep', 'http://tetha.com/konsep#');
    EasyRdf_Namespace::set('dimensi', 'http://tetha.com/dimensi#');
    EasyRdf_Namespace::set('qb', 'http://purl.org/linked-data/cube#');
    EasyRdf_Namespace::set('vocab', 'http://tetha.com/vocab#');
    EasyRdf_Namespace::set('kategori', 'http://tetha.com/kategori#');
    EasyRdf_Namespace::set('hangat', 'http://tetha.com/hangat#');
    EasyRdf_Namespace::set('news', 'http://tetha.com/news#');

    $sparql = new EasyRdf_Sparql_Client('http://localhost:3030/fp_tetha/sparql');
    $query = ' PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
prefix konsep:          <http://tetha.com/konsep#> 
prefix dimensi:         <http://tetha.com/dimensi#> 
prefix qb:              <http://purl.org/linked-data/cube#>
prefix tetha:           <http://tetha.com/datastatistik#> 
prefix vocab:           <http://tetha.com/vocab#> 
prefix kategori:        <http://tetha.com/kategori#> 
prefix hangat:          <http://tetha.com/hangat#>
prefix news:            <http://tetha.com/news#>


select ?KATEGORI ?HOTTEST ?JUMLAH {
  ?data dimensi:kategori ?kategori .
  ?kategori rdfs:label ?KATEGORI .
  ?data dimensi:hangat ?topik .
  ?topik rdfs:label ?HOTTEST .
  ?data tetha:jmlh_posting ?JUMLAH .
  
}
Limit 25

';
    $result = $sparql->query(
        $query
    );
    $no = 1;

  
        foreach ($result as $row) {
            
                                echo "{name:'".str_replace('http://localhost/vayvis/ns/gov/','',$row->HOTTEST)."',";
                    
            echo "y:".str_replace(',','.',$row->JUMLAH).',},';
        }

?>