<h3>Hi: {{ $order->order->name}} </h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A rerum autem facilis excepturi accusantium id repellendus, delectus
     eius quasi fugit optio! Voluptatum quia impedit animi, quis pariatur odio maxime reprehenderit!</p>
<p>
    <a href="{{route('order.verify',$order->id)}}">click here to verify your order</a>
</p>