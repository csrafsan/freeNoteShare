@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
         <img src="/svg/rafsan.jpg" style="height:150px; border: 2px  solid red" class="rounded-circle" >
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->name}}</h1>
                <a href="#">Online Pyament</a>
            </div>
            <div><h3>{{$user->username}}</h3></div>
            <div><div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  <label class="form-check-label" for="flexSwitchCheckDefault">Make you meal ON/OFF</label>
</div></div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>

        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4"><img src="https://scontent.fdac1-1.fna.fbcdn.net/v/t39.30808-6/273972658_1145395406276111_5166215417866589776_n.jpg?_nc_cat=101&ccb=1-6&_nc_sid=09cbfe&_nc_eui2=AeGuo1bANR6_qrwisY3VpFm0ZUIBeeLjSVNlQgF54uNJU1wt-yGeLGg0yARq5wln5ilQpyLelZp1rWQpYOaEuuOl&_nc_ohc=uRojUbpM4l8AX-c9ZzF&_nc_oc=AQmkjJtutSGdvXo467Mb-vkzEZMDKVYSbU2kGWN8AdOMaI_bbiNZuqv0mMkyD8Yy3cA&tn=uxz7Q52byHpTVkdD&_nc_zt=23&_nc_ht=scontent.fdac1-1.fna&oh=00_AT9RXDmZl7N0vLW46Ss-oluQTBmFiuju-UxMN4LyOv1yxQ&oe=627EC6FD" class="w-100"></div>
        <div class="col-4"><img src="https://scontent.fdac1-1.fna.fbcdn.net/v/t39.30808-6/272431591_1131088954373423_4618441383700096581_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=8bfeb9&_nc_eui2=AeHCh-0H4UmvfyEIKrfXqCPo5YTibrJHj0rlhOJuskePSpJe-uQ4Egu1nKlPVVGbzpBZvVVW9TcE-VF_JoArgrS4&_nc_ohc=x8M7b-AxSdAAX9YHqUC&tn=uxz7Q52byHpTVkdD&_nc_zt=23&_nc_ht=scontent.fdac1-1.fna&oh=00_AT-K-Tu-kCeGDRHDEi0ziG_LXrogbJ0YPU8LokQEUfl--Q&oe=627FDB4D" class="w-100"></div>
        <div class="col-4"><img src="https://scontent.fdac1-1.fna.fbcdn.net/v/t39.30808-6/278061504_1178921612923490_4459633543429213393_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=8bfeb9&_nc_eui2=AeEP8p5tzWDwvxExfCzDoC1cAMlWk4xwSf8AyVaTjHBJ_-L64OmedpZgbgJvtyYqDJZOD1zaIqVXf17IC53nblNC&_nc_ohc=tQv5JnCn-esAX9uFO_1&_nc_zt=23&_nc_ht=scontent.fdac1-1.fna&oh=00_AT9bQ4-EB1TRu_fnPQ4P2cTLACbLT9STREnp1xzb6ZlovA&oe=627F662D" class="w-100"></div>
        <div class="col-4"><img src="https://scontent.fdac1-1.fna.fbcdn.net/v/t39.30808-6/273972658_1145395406276111_5166215417866589776_n.jpg?_nc_cat=101&ccb=1-6&_nc_sid=09cbfe&_nc_eui2=AeGuo1bANR6_qrwisY3VpFm0ZUIBeeLjSVNlQgF54uNJU1wt-yGeLGg0yARq5wln5ilQpyLelZp1rWQpYOaEuuOl&_nc_ohc=uRojUbpM4l8AX-c9ZzF&_nc_oc=AQmkjJtutSGdvXo467Mb-vkzEZMDKVYSbU2kGWN8AdOMaI_bbiNZuqv0mMkyD8Yy3cA&tn=uxz7Q52byHpTVkdD&_nc_zt=23&_nc_ht=scontent.fdac1-1.fna&oh=00_AT9RXDmZl7N0vLW46Ss-oluQTBmFiuju-UxMN4LyOv1yxQ&oe=627EC6FD" class="w-100"></div>
        <div class="col-4"><img src="https://scontent.fdac1-1.fna.fbcdn.net/v/t39.30808-6/272431591_1131088954373423_4618441383700096581_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=8bfeb9&_nc_eui2=AeHCh-0H4UmvfyEIKrfXqCPo5YTibrJHj0rlhOJuskePSpJe-uQ4Egu1nKlPVVGbzpBZvVVW9TcE-VF_JoArgrS4&_nc_ohc=x8M7b-AxSdAAX9YHqUC&tn=uxz7Q52byHpTVkdD&_nc_zt=23&_nc_ht=scontent.fdac1-1.fna&oh=00_AT-K-Tu-kCeGDRHDEi0ziG_LXrogbJ0YPU8LokQEUfl--Q&oe=627FDB4D" class="w-100"></div>
        <div class="col-4"><img src="https://scontent.fdac1-1.fna.fbcdn.net/v/t39.30808-6/278061504_1178921612923490_4459633543429213393_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=8bfeb9&_nc_eui2=AeEP8p5tzWDwvxExfCzDoC1cAMlWk4xwSf8AyVaTjHBJ_-L64OmedpZgbgJvtyYqDJZOD1zaIqVXf17IC53nblNC&_nc_ohc=tQv5JnCn-esAX9uFO_1&_nc_zt=23&_nc_ht=scontent.fdac1-1.fna&oh=00_AT9bQ4-EB1TRu_fnPQ4P2cTLACbLT9STREnp1xzb6ZlovA&oe=627F662D" class="w-100"></div>
    </div>
</div>
@endsection
