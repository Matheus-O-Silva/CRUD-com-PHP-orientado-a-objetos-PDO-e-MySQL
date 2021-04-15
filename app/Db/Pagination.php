<?php

namespace App\Db;

class Pagination
{
    /**
     * Número máximo de registro por páginas
     * @var integer
     */
    private $limit;

    /**
     * Quantidade total de resultados do Bd
     * @var integer
     */
    private $results;

    /**
     * Quantidade de páginas
     * @var integer
     */
    private $pages;

    /**
     * Página atual
     * @var integer
     */
    private $currentPage;

    /**
     * Construtor da classe
     * @param integer $results
     * @param integer $currentPage
     * @param integer $limit
     */
    public function __construct($results,$currentPage = 1,$limit = 10)
    {
        $this->results = $results;
        $this->limimt = $limit;
        $this->currentPage = (is_numeric($currentPage) and $currentPage > 0) ? $currentPage : 0;
    }
}



?>