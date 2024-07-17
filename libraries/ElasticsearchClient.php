<?php
use Elasticsearch\ClientBuilder;

class ElasticsearchClient extends Elasticsearch\ClientBuilder {
    private $client;
	/**
     * Constructor
     */
    public function __construct(){
        $this->client = ClientBuilder::create()
            ->setHosts([Elasticsearch::HOST])
            ->build();
    }

	/**
     * Destructor
     */
	public function __destruct() {
        $this->client = null;
	} 

    /**
     * Get the Elasticsearch client
     *
     * @return \Elasticsearch\Client
     */
    public function getClient() {
        return $this->client;
    }
}
