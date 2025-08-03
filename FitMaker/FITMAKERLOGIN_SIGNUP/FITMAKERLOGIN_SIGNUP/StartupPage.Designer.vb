<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class StartupPage
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(StartupPage))
        Me.GroupBox1 = New System.Windows.Forms.GroupBox()
        Me.btnPublicUser = New System.Windows.Forms.Button()
        Me.btnUTPStudent = New System.Windows.Forms.Button()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Label6 = New System.Windows.Forms.Label()
        Me.PictureBox1 = New System.Windows.Forms.PictureBox()
        Me.GroupBox1.SuspendLayout()
        CType(Me.PictureBox1, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'GroupBox1
        '
        Me.GroupBox1.Controls.Add(Me.btnPublicUser)
        Me.GroupBox1.Controls.Add(Me.btnUTPStudent)
        Me.GroupBox1.Location = New System.Drawing.Point(79, 278)
        Me.GroupBox1.Name = "GroupBox1"
        Me.GroupBox1.Size = New System.Drawing.Size(341, 197)
        Me.GroupBox1.TabIndex = 27
        Me.GroupBox1.TabStop = False
        '
        'btnPublicUser
        '
        Me.btnPublicUser.BackColor = System.Drawing.Color.FromArgb(CType(CType(164, Byte), Integer), CType(CType(144, Byte), Integer), CType(CType(124, Byte), Integer))
        Me.btnPublicUser.FlatStyle = System.Windows.Forms.FlatStyle.Flat
        Me.btnPublicUser.Font = New System.Drawing.Font("Segoe UI", 9.75!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnPublicUser.ForeColor = System.Drawing.Color.Transparent
        Me.btnPublicUser.Location = New System.Drawing.Point(21, 108)
        Me.btnPublicUser.Margin = New System.Windows.Forms.Padding(4)
        Me.btnPublicUser.Name = "btnPublicUser"
        Me.btnPublicUser.Size = New System.Drawing.Size(299, 68)
        Me.btnPublicUser.TabIndex = 21
        Me.btnPublicUser.Text = "Public User"
        Me.btnPublicUser.UseVisualStyleBackColor = False
        '
        'btnUTPStudent
        '
        Me.btnUTPStudent.BackColor = System.Drawing.Color.FromArgb(CType(CType(164, Byte), Integer), CType(CType(144, Byte), Integer), CType(CType(124, Byte), Integer))
        Me.btnUTPStudent.FlatStyle = System.Windows.Forms.FlatStyle.Flat
        Me.btnUTPStudent.Font = New System.Drawing.Font("Segoe UI", 9.75!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btnUTPStudent.ForeColor = System.Drawing.Color.Transparent
        Me.btnUTPStudent.Location = New System.Drawing.Point(21, 22)
        Me.btnUTPStudent.Margin = New System.Windows.Forms.Padding(4)
        Me.btnUTPStudent.Name = "btnUTPStudent"
        Me.btnUTPStudent.Size = New System.Drawing.Size(299, 68)
        Me.btnUTPStudent.TabIndex = 20
        Me.btnUTPStudent.Text = "UTP Student"
        Me.btnUTPStudent.UseVisualStyleBackColor = False
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.BackColor = System.Drawing.Color.Transparent
        Me.Label1.Font = New System.Drawing.Font("Segoe UI", 17.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label1.ForeColor = System.Drawing.Color.Black
        Me.Label1.Location = New System.Drawing.Point(93, 203)
        Me.Label1.Margin = New System.Windows.Forms.Padding(4, 0, 4, 0)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(311, 40)
        Me.Label1.TabIndex = 22
        Me.Label1.Text = "Welcome to FitMaker"
        '
        'Label6
        '
        Me.Label6.AutoSize = True
        Me.Label6.BackColor = System.Drawing.Color.Transparent
        Me.Label6.Font = New System.Drawing.Font("Segoe UI Light", 8.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label6.ForeColor = System.Drawing.Color.Black
        Me.Label6.Location = New System.Drawing.Point(102, 243)
        Me.Label6.Margin = New System.Windows.Forms.Padding(4, 0, 4, 0)
        Me.Label6.Name = "Label6"
        Me.Label6.Size = New System.Drawing.Size(297, 19)
        Me.Label6.TabIndex = 28
        Me.Label6.Text = "Please choose one user to continue to login page"
        '
        'PictureBox1
        '
        Me.PictureBox1.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D
        Me.PictureBox1.Image = CType(resources.GetObject("PictureBox1.Image"), System.Drawing.Image)
        Me.PictureBox1.Location = New System.Drawing.Point(147, 24)
        Me.PictureBox1.Name = "PictureBox1"
        Me.PictureBox1.Size = New System.Drawing.Size(216, 153)
        Me.PictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom
        Me.PictureBox1.TabIndex = 26
        Me.PictureBox1.TabStop = False
        '
        'StartupPage
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(8.0!, 16.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.BackColor = System.Drawing.Color.FromArgb(CType(CType(250, Byte), Integer), CType(CType(245, Byte), Integer), CType(CType(239, Byte), Integer))
        Me.BackgroundImage = Global.FITMAKERLOGIN_SIGNUP.My.Resources.Resources.background_sign_in
        Me.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch
        Me.ClientSize = New System.Drawing.Size(864, 525)
        Me.Controls.Add(Me.Label6)
        Me.Controls.Add(Me.Label1)
        Me.Controls.Add(Me.GroupBox1)
        Me.Controls.Add(Me.PictureBox1)
        Me.DoubleBuffered = True
        Me.Name = "StartupPage"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        Me.Text = "Startup "
        Me.GroupBox1.ResumeLayout(False)
        CType(Me.PictureBox1, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents PictureBox1 As PictureBox
    Friend WithEvents GroupBox1 As GroupBox
    Friend WithEvents btnUTPStudent As Button
    Friend WithEvents btnPublicUser As Button
    Friend WithEvents Label1 As Label
    Friend WithEvents Label6 As Label
End Class
