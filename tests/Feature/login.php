<?php

test('Testing the ability to load a login page', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
});
