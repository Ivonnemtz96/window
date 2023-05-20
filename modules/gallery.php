<style>
.galeria{
  position: relative;
  width: 100%;
  display: flex;
  gap: 10px;
  padding: 100px 2vw;
}
.column{
  flex:1;
  display: flex;
  flex-direction: column;
  gap:10px;
}
.post{
  position: relative;
  overflow: hidden;
  width:100%;
}
img{
  width: 100%;
  border-radius: 5px;
  height: 100%;
}

.overlay{
  position: absolute;
  top:0;
  left: 0;
  width:100%;
  height:100%;
  background:#161616;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity:0;
  transition:0.5s;
  border-radius: 5px;
}
.post:hover .overlay{
  opacity: 0.5;
  cursor: pointer;
}
</style>




        <div class="galeria">
       
       </div>
   

