
<div class="fadeInRightBig">
    <h3 class="font-bold"><?=$header_content?></h3>
    <hr>
    	
    <div class="container" >
    	
        <div id="app">
        	<div>{{{ raw }}}</div>
            <hr>
        	<div>{{ hello }}</div>
            <div>my name is {{* name }}</div><?php // tanda * pada variabel artinya variabel itu permanen, tidak bisa diubah melalui console.log?>
            <div> {{ laki ? 'Laki - Laki' : 'Perempuan'}}</div>
            <div>
            nilai : 
            	{{ proses_nilai(nilai) }}
            </div>
            <div> Mobil yang saya punya : {{ mobil }} </div>
            <div> {{ name + " ganteng"}} </div>
            
            <?php // brachet 3 artinya untuk men generate html ?>
        </div>
        
        
    </div>
    
</div>
<script>
	var mobil = ["BMW","Suzuki","Honda","Toyota"];
	
	var vo = new Vue({
		el:"#app",
		data:{ 
			hello:"Hello World",
			name:"Aries Dimas Yudhistira",
			raw: "<b> <h3> Yudhistira Enterprise </h3> </b>",
			laki:true,
			nilai:100
			//mobil:mobil,
		} 
	});
	
	function proses_nilai(nilai)
	{
		
		if(nilai < 100)
		{
			return 'Kurang Sempurna';
		}
		else (nilai == 100)
		{
			return 'Sempurna' ;	
        }
	}

</script>

