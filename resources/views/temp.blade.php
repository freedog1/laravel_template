<?php
phpinfo();
?>
<main>
  <section>
    <div>
      <form method="POST" action="{{route('temp.store')}}"> 
        @csrf
        <input name="free_word" type="text">
        <button type="submit">更新する</button>
    </div>
    <div>
      登録一覧<br>
      @foreach ($tempData as $data)
      {{$data->text}}
      <br>
      @endforeach
    </div>
  </section>
</main>