
<div class="fadeInRightBig">
    <h3 class="font-bold"><?=$header_content?></h3>
    <hr>
    <?php
		// mutating: artinya mengubah nilai asli object nya
		// push, pop, shift, unshift
		// non-mutating : artinya tidak mengubah nilai asli object nya
		// filter, concat, slice, 
		
		//track by , berfungsi memberikan 'auto increment' seperti di database
	
	?>
    <div class="container" >
    	
        <div id="app">
        	
            <ul>
            	<li v-for="member in members" track-by"$index">
                	{{ $index}} . {{ member.nama }}
                </li>
            </ul>
            
            <h2> Filter </h2>
            
            <ul>
                <li v-for="member in members | filterBy 'r' in 'nama'" >
                {{ member.nama}}
                </li>
            </ul>
            
            <h2> Order </h2>
            
            <ul>
                <li v-for="member in members | orderBy 'nama'" >
                {{ member.nama | capitalize }}
                </li>
            </ul>
            
            
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
				{nama:"toni",umur:24},
				{nama:"fany",umur:20}
			]
			//mobil:mobil,
		} 
	});

</script>

