<h3>Complimenti {{$name}}!!</h3>
<p>
    Hai ricevuto un nuovo ordine <br>
    Indirizzo di consegna: {{$order->address}}.<br>
    Riepilogo:
    @foreach ($order->dishes as $dish)
        <div>
            {{$dish->pivot->quantity ? $dish->pivot->quantity : '1'}}
            {{$dish->name}}
        </div>
    @endforeach
    Totale pagato: {{$order->total_price}}<br>
</p>
<span>Accedi alla tua area riservata per ulteriori dettagli.</span>
<h5>Il team di Hungry</h5>
