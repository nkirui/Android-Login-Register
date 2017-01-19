package com.example.root.loginregister;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.EditText;
import android.widget.TextView;

public class UserAreaActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_user_area);
        final EditText etusername = (EditText)findViewById(R.id.etUsername);
        final EditText etAge = (EditText)findViewById(R.id.etAge);
        final TextView WelcomeMesssage= (android.widget.TextView)findViewById(R.id.tvWelcomeMsg);

        Intent intent = getIntent();
        String name =intent.getStringExtra("name");
        String username =intent.getStringExtra("username");
        int age =intent.getIntExtra("age",-1);
        String message = name + "welcome to your user area";
        WelcomeMesssage.setText(message);
        etusername.setText(username);
        etAge.setText(age + "");
    }
}
