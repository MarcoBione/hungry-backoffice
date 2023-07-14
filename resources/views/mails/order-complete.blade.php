<h3>{{$order->receiver}}, grazie per il tuo ordine</h3>
<p>
    Il tuo ordine è effettuato con successo. <br>
    Sarà spedito all'indirizzo: {{$order->address}}. <br>
    Riepilogo:
    @foreach ($order->dishes as $dish)
        <div>
            {{$dish->pivot->quantity ? $dish->pivot->quantity : '1'}}
            {{$dish->name}}
        </div>
    @endforeach
    Totale pagato: {{$order->total_price}} &euro;.
</p>
<span>Buon appetito!</span>
<h5>Il team di Hungry</h5>
