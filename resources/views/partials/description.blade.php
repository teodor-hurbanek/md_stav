<section class="welcome-description">
    <div class="containerCustom">
        @if (Request::path() == '/' || Request::path() == 'services')
            <p>
                Stavebná firma <span>M&D STAV</span>, vznikla na základoch dlhoročnej spolupráce ľudí, ktorých spája spoločná pracovná história a úspechy na projektoch, realizovaných na celom Slovensku, ale aj v Česku. Spoločnosť má preto k dispozícii, inak nezískateľný ľudský potenciál a zdroje, v podobe profesionálov, ktorí sa zúčasťnovali na desiatkach stavebných projektov rôznej veľkosti a náročnosti. V rámci našej pôsobnosti preto ponúkame, celé naše know-how a to klientom, ktorí majú záujem o realizáciu moderných a kvalitných stavebných činnosti.
            </p> 
        @else   
            <p>
                <span>{{ $service->title }}</span>
            </p>
            <p>
                {{ $service->description }}
            </p> 
        @endif
    </div>
</section>