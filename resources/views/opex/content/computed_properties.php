
<div class="fadeInRightBig">
    <h3 class="font-bold"><?=$header_content?></h3>
    <hr>
    	
    <div class="container" >
    	
        <?php //directive 
				//conditional directive
		?>
        
        <div id="app">
        	<div> a {{ a }} -  b {{ b }} </div>
            <div v-if="done"><?php //bisa memakai negasi ! jadi v-if="!done" ?>
            	<div> {{ biodata }}</div>
            </div>
            <div v-else>
            
            </div>
            
            <div v-show="this.umur > 10">
            	anda sudah baligh ({{ umur }})
            </div>
            
        </div>
        
        
    </div>
    
</div>
<script>
	
	var vo = new Vue({
		el:"#app",
		data:{ 
			a:1,
			
			nama:"Aries Dimas Yudhistira",
			umur:26,
			biodata:'',
			done:true
		} ,
		computed:{
			b:function(){
				return this.a + 2;
			},
			// cara biasa
			/* biodata:function(){
				return this.nama+" Umurnya "+this.umur;	
			}*/ 
			
			//cara setter dan getter
			biodata:
			{
				get:function()
				{
					return this.nama+" umurnya "+this.umur;
				
				},
				// set lewat console.log
				set:function(params)
				{
					var credential = params.split(" ");
					this.nama = credential[0];
					this.nama = credential[1];
				}
			}
		}
	});
	

</script>

