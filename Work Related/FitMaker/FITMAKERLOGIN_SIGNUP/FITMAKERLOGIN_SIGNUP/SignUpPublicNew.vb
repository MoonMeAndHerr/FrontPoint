Imports System.Data.OleDb
Public Class SignUpPublicNew
    Dim conn As New OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=C:\Users\Tham Qi Lien\source\repos\FITMAKERLOGIN_SIGNUP\VP FITMAKER DATABASE.accdb")
    Dim passwordVisible As Boolean = False
    Dim confirmPasswordVisible As Boolean = False

    Private Sub SignUpPublicNew_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        txtPassword.PasswordChar = "*"c
        txtComfirmPassword.PasswordChar = "*"c
        ' Load the default (eye closed)
        picTogglePassword.Image = My.Resources.hide
        picTogglePassword2.Image = My.Resources.hide
    End Sub

    ' For txtPassword and picTogglePassword
    Private Sub picTogglePassword_Click(sender As Object, e As EventArgs) Handles picTogglePassword.Click
        If passwordVisible Then
            txtPassword.PasswordChar = "*"c
            picTogglePassword.Image = My.Resources.hide
            passwordVisible = False
        Else
            txtPassword.PasswordChar = ControlChars.NullChar
            picTogglePassword.Image = My.Resources.show
            passwordVisible = True
        End If
    End Sub

    ' For txtComfirmPassword and picTogglePassword2
    Private Sub picTogglePassword2_Click(sender As Object, e As EventArgs) Handles picTogglePassword2.Click
        If confirmPasswordVisible Then
            txtComfirmPassword.PasswordChar = "*"c
            picTogglePassword2.Image = My.Resources.hide
            confirmPasswordVisible = False
        Else
            txtComfirmPassword.PasswordChar = ControlChars.NullChar
            picTogglePassword2.Image = My.Resources.show
            confirmPasswordVisible = True
        End If
    End Sub


    Private Sub btnSignUp_Click(sender As Object, e As EventArgs) Handles btnSignUp.Click
        Dim fullName As String = txtFullName.Text.Trim()
        Dim username As String = txtUsername.Text.Trim()
        Dim email As String = txtEmail.Text.Trim()
        Dim phone As String = txtPhone.Text.Trim()
        Dim password As String = txtPassword.Text
        Dim confirmPassword As String = txtComfirmPassword.Text
        Dim gender As String = If(rdbMale.Checked, "Male", If(rdbFemale.Checked, "Female", ""))

        If fullName = "" Or username = "" Or email = "" Or phone = "" Or password = "" Or confirmPassword = "" Or gender = "" Then
            MessageBox.Show("Please fill in all the required fields.", "Validation Error", MessageBoxButtons.OK, MessageBoxIcon.Warning)
            Return
        End If

        If password <> confirmPassword Then
            MessageBox.Show("Passwords do not match.", "Validation Error", MessageBoxButtons.OK, MessageBoxIcon.Warning)
            Return
        End If

        Try
            conn.Open()

            Dim insertCmd As New OleDbCommand("INSERT INTO [User Info] ([Full Name], Username, Email, Phone, [Password], Gender, [Is UTP Student], [Subscription Type], [Remember Me]) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)", conn)

            insertCmd.Parameters.AddWithValue("?", fullName)
            insertCmd.Parameters.AddWithValue("?", username)
            insertCmd.Parameters.AddWithValue("?", email)
            insertCmd.Parameters.AddWithValue("?", phone)
            insertCmd.Parameters.AddWithValue("?", password)
            insertCmd.Parameters.AddWithValue("?", gender)
            insertCmd.Parameters.AddWithValue("?", False) ' Is UTP Student = False
            insertCmd.Parameters.AddWithValue("?", "None") ' Subscription Type = None
            insertCmd.Parameters.AddWithValue("?", False) ' Remember Me = False by default

            insertCmd.ExecuteNonQuery()
            MessageBox.Show("Registration successful!", "Success", MessageBoxButtons.OK, MessageBoxIcon.Information)

            ' Optional: Redirect to LoginPublic
            Me.Hide()
            Dim loginForm As New LoginPublic()
            loginForm.Show()

        Catch ex As Exception
            MessageBox.Show("Database error: " & ex.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error)
        Finally
            conn.Close()
        End Try
    End Sub

    Private Sub btnBack_Click(sender As Object, e As EventArgs) Handles btnBack.Click
        Me.Hide()
        Dim LoginPublic As New LoginPublic()
        LoginPublic.Show()
    End Sub
End Class
