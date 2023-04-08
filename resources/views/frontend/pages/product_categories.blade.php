@extends('layouts.frontend.master')

@section('content')

    <section class="categories">
      <h2>Categories</h2>
      <ul>
        <?php foreach($categories as $category): ?>
          <li><a href="#"><?php echo $category; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </section>

@endsection
