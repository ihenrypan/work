CXXFLAGS = -g -pg -finline-functions -Wall -Winline -pipe 


LIBPATH=               ../libs/

INCLUDEDIR=             -I$(LIBPATH)ullib/include/ 

LIBDIR=                 -L$(LIBPATH)ullib/lib -lullib 



CC  = gcc
CPP = g++
CXX = gcc
EXECUTABLE = test 

all     :  $(EXECUTABLE)
	rm -f *.o

clean   :
	rm -f *.o $(EXECUTABLE)

#$(EXECUTABLE)	: easyVelocity.o Send_req.o Recv_res.o Analysis.o Query.o Unit_Queue.o Common.o Conf.o Control_Send.o

$(EXECUTABLE)	: test.o ../util.o 
	$(CPP) -o $@ $^ $(LIBDIR) $(INCLUDEDIR) -lm -lpthread -lcurl

%.o     : %.cpp
	$(CPP) $(CXXFLAGS) -c $< -o $@ $(INCLUDEDIR) 

