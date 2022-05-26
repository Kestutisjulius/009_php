<?php
const CLIENTS = [];
if(!file_exists(__DIR__.'/clients.json')){
    file_put_contents(__DIR__.'/clients.json', json_encode([]));
}
