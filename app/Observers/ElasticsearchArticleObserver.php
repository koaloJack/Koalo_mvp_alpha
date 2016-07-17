<?php namespace App\Observers;

use App\SearchString;
use Elasticsearch\Client;

class ElasticsearchArticleObserver
{
    private $elasticsearch;

    public function __construct(Client $elasticsearch)
    {
        $this->elasticsearch = $elasticsearch;
    }

    public function created(SearchString $article)
    {
        $this->elasticsearch->index([
            'index' => 'acme',
            'type' => 'searchstring',
            'id' => $article->id,
            'body' => $article->toArray()
        ]);
    }

    public function updated(SearchString $article)
    {
        $this->elasticsearch->index([
            'index' => 'acme',
            'type' => 'searchstring',
            'id' => $article->id,
            'body' => $article->toArray()
        ]);
    }

    public function deleted(SearchString $article)
    {
        $this->elasticsearch->delete([
            'index' => 'acme',
            'type' => 'searchstring',
            'id' => $article->id
        ]);
    }
}
