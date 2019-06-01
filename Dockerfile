FROM openjdk 
COPY mycode.java / 
CMD ["java", "./mycode.java"]