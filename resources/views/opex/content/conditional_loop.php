
<div class="fadeInRightBig">
    <h3 class="font-bold"><?=$header_content?></h3>
    <hr>
    	
    <div class="container" >
    	
        <div id="app">
        	<ul>
            	<li v-for="member in members">
                	{{ member.nama }}
                </li>
            </ul>
            
            <!-- memunculkan detail -->
            <div v-for="row in customer">
            	{{ $key }} => {{ row }}
            </div>
            
        </div>
        
        
    </div>
    
</div>
<script>
	
	
	var vo = new Vue({
		el:"#app",
		data:{ 
			members:[
				{nama:"dimas",umur:25},
				{nama:"rian",umur:26},
				{nama:"toni",umur:24}
			],
			
			customer:{
				name:"rifal",
				umur:35,
				profession:"sailor"
			}
			//mobil:mobil,
		} 
	});

</script>

