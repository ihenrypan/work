CXXFLAGS = -g -pg -finline-functions -Wall -Winline -pipe 


LIBPATH=               ./libs/

INCLUDEDIR=             -I$(LIBPATH)ullib/include/ -I$(LIBPATH)rapidjson/include/

LIBDIR=                 -L$(LIBPATH)ullib/lib -lullib 



CC  = gcc
CPP = g++
CXX = gcc
EXECUTABLE = diffPro

all     :  $(EXECUTABLE)
	rm -f *.o

clean   :
	rm -f *.o $(EXECUTABLE)

#$(EXECUTABLE)	: easyVelocity.o Send_req.o Recv_res.o Analysis.o Query.o Unit_Queue.o Common.o Conf.o Control_Send.o

$(EXECUTABLE)	: diffPro.o util.o conf.o args.o process.o
	$(CPP) -o $@ $^ $(LIBDIR) $(INCLUDEDIR) -lm -lpthread -lcurl

%.o     : %.cpp
	$(CPP) $(CXXFLAGS) -c $< -o $@ $(INCLUDEDIR) 

