#Video 43 del curso
form tkinter import *
raiz = Tk()
raiz.title("Ventanade pruebas")
#raiz.resizable(True,False)
raiz.iconbitmap("gato.ico")
#raiz.geometry("650x350")
raiz.config(bg="blue")
miFrame = Frame()
miFrame.pack(fill="both", expand="True")
miFrame.config(bg="red") #la raiz se adapta al frame
miFrame.config(width="650", height="350)
miFrame=config(bd=35)
miFrame.config(relief="groove")
miFrame.config(cursor="pirate")
raiz.mainloop()

'''
 Todo lo que se aplica al frame
 se puede aplicar a la raiz 
 '''
